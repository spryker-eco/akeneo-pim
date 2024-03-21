<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\HttpClient;

use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Stream\Exception\SeekException;
use Http\Client\Exception as HttpExceptionInterface;
use Http\Client\Exception\HttpException;
use Http\Client\Exception\NetworkException as HttpNetworkException;
use Http\Client\Exception\RequestException as HttpRequestException;
use Http\Client\Exception\TransferException as HttpTransferException;
use Http\Promise\Promise as HttpPromise;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\HttpClient\Exception\UnexpectedValueException;
use Throwable;

class Promise implements HttpPromise
{
    /**
     * @var \GuzzleHttp\Promise\PromiseInterface
     */
    protected $promise;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    protected $response;

    /**
     * @var \Http\Client\Exception
     */
    protected $exception;

    /**
     * @var \Psr\Http\Message\RequestInterface
     */
    protected $request;

    /**
     * @param \GuzzleHttp\Promise\PromiseInterface $promise
     * @param \Psr\Http\Message\RequestInterface $request
     */
    public function __construct(PromiseInterface $promise, RequestInterface $request)
    {
        $this->request = $request;
        $this->state = static::PENDING;
        $this->promise = $promise->then(function ($response) {
            return $this->handleResponse($response);
        }, function ($reason) use ($request) {
            $this->exception = $this->handleRejectCallback($reason, $request);

            throw $this->exception;
        });
    }

    /**
     * @param callable|null $onFulfilled
     * @param callable|null $onRejected
     *
     * @return \Http\Promise\Promise
     */
    public function then(?callable $onFulfilled = null, ?callable $onRejected = null): HttpPromise
    {
        return new self($this->promise->then($onFulfilled, $onRejected), $this->request);
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param bool $unwrap
     *
     * @throws \Http\Client\Exception
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function wait($unwrap = true): ?ResponseInterface
    {
        $this->promise->wait(false);

        if (!$unwrap) {
            return null;
        }

        if ($this->getState() == static::REJECTED && $this->exception !== null) {
            throw $this->exception;
        }

        return $this->response;
    }

    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    protected function handleResponse(ResponseInterface $response): ResponseInterface
    {
        $this->response = $response;
        $this->state = static::FULFILLED;

        return $response;
    }

    /**
     * @param callable $rejectCallback
     * @param \Psr\Http\Message\RequestInterface $request
     *
     * @return \Http\Client\Exception
     */
    protected function handleRejectCallback(callable $rejectCallback, RequestInterface $request): HttpExceptionInterface
    {
        if ($rejectCallback instanceof HttpExceptionInterface) {
            return $rejectCallback;
        }

        if ($rejectCallback instanceof GuzzleException) {
            return $this->handleGuzzleException($rejectCallback, $request);
        }

        if ($rejectCallback instanceof Throwable) {
            return new HttpTransferException('Invalid exception returned from Guzzle', 0, $rejectCallback);
        }

        return new UnexpectedValueException('Reason returned from Guzzle must be an Exception');
    }

    /**
     * @param \GuzzleHttp\Exception\GuzzleException $exception
     * @param \Psr\Http\Message\RequestInterface $request
     *
     * @return \Http\Client\Exception
     */
    protected function handleGuzzleException(GuzzleException $exception, RequestInterface $request): HttpExceptionInterface
    {
        if ($exception instanceof SeekException) {
            return new HttpRequestException($exception->getMessage(), $request, $exception);
        }

        if ($exception instanceof ConnectException) {
            return new HttpNetworkException($exception->getMessage(), $exception->getRequest(), $exception);
        }

        if ($exception instanceof RequestException && $exception->hasResponse()) {
            return new HttpException(
                $exception->getMessage(),
                $exception->getRequest(),
                $exception->getResponse(),
                $exception,
            );
        }

        if ($exception instanceof RequestException) {
            return new HttpRequestException($exception->getMessage(), $exception->getRequest(), $exception);
        }

        return new HttpTransferException($exception->getMessage(), 0, $exception);
    }
}
