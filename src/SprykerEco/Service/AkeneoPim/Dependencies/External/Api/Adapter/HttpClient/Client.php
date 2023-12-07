<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\AkeneoPim\Dependencies\External\Api\Adapter\HttpClient;

use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Utils;
use Http\Client\HttpClient;
use Http\Promise\Promise as HttpPromise;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class Client implements HttpClient
{
    /**
     * @var \Psr\Http\Client\ClientInterface
     */
    protected ClientInterface $client;

    public function __construct()
    {
        $this->client = $this->buildClient();
    }

    /**
     * @param \Psr\Http\Message\RequestInterface $request
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        return $this->sendAsyncRequest($request)->wait();
    }

    /**
     * @param \Psr\Http\Message\RequestInterface $request
     *
     * @return \Http\Promise\Promise
     */
    protected function sendAsyncRequest(RequestInterface $request): HttpPromise
    {
        $promise = $this->client->sendAsync($request);

        return new Promise($promise, $request);
    }

    /**
     * @param array<string, mixed> $config
     *
     * @return \GuzzleHttp\Client
     */
    protected function buildClient(): GuzzleHttpClient
    {
        $handlerStack = $this->createHandlerStack();
        $handlerStack->push(Middleware::prepareBody(), 'prepare_body');

        return new GuzzleHttpClient(['handler' => $handlerStack]);
    }

    /**
     * @return \GuzzleHttp\HandlerStack
     */
    protected function createHandlerStack(): HandlerStack
    {
        if (method_exists(Utils::class, 'chooseHandler')) {
            return new HandlerStack(Utils::chooseHandler());
        }

        return new HandlerStack(\GuzzleHttp\choose_handler());
    }
}
