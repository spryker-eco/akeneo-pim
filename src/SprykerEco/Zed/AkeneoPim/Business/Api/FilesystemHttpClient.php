<?php

namespace SprykerEco\Zed\AkeneoPim\Business\Api;

use GuzzleHttp\Psr7\Response;
use Http\Client\HttpClient;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

class FilesystemHttpClient implements HttpClient
{
    const PATH_TO_JSON_FILES = 'directory';

    /**
     * @var $array
     */
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public static function createWithConfig(array $config): HttpClient
    {
        return new static($config);
    }

    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        if ($request->getUri()->getPath() === '/api/oauth/v1/token') {
            return new Response();
        }

        try {
            $response = new Response(
                200,
                [],
                $this->getBody($request->getUri())
            );
        } catch (\Exception $e) {
            $response = new Response(
                500,
                [],
                $e->getMessage()
            );
        }

        return $response;
    }

    private function getFileName(UriInterface $uri)
    {
        $path = $uri->getPath();
        $query = [];
        parse_str($uri->getQuery(), $query);

        $filePath = $this->getPathWithoutExtension($path, $query['page'] ?? 1);

        $filename = sprintf(
            '%s/%s.json',
            $this->config[static::PATH_TO_JSON_FILES],
            $filePath
        );

        return $filename;
    }

    /**
     * @throws \Exception
     */
    private function getBody(UriInterface $uri): string
    {
        $filename = $this->getFileName($uri);

        $body = file_get_contents(
            $filename
        );

        if (!$body) {
            throw new \Exception(sprintf('JSON file not found: %s', $filename));
        }

        return $body;
    }

    private function getPathWithoutExtension(string $path, int $page): string
    {
        $path = str_replace('/api/rest/v1/', '', $path);

        $matches = [];
        if (preg_match('/attributes\/(.+)\/options/', $path, $matches)) {
            return 'attribute-options/' . $matches[1];
        }

        return $path . '/' . $page;
    }
}