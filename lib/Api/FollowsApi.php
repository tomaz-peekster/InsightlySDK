<?php
/**
 * FollowsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Insightly API v2.2
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v2.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * FollowsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FollowsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getFollows
     *
     * Gets a list of followed records for the user
     *
     * @param  string $record_type Optional, filters followed records by a given record type. (optional)
     * @param  int $skip Optional, number of records to skip. (optional)
     * @param  int $top Optional, maximum number of records to return in the response. (optional)
     * @param  bool $count_total Optional, true if total number of records should be returned in the response headers. (optional, default to false)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\UserFollow[]
     */
    public function getFollows($record_type = null, $skip = null, $top = null, $count_total = 'false')
    {
        list($response) = $this->getFollowsWithHttpInfo($record_type, $skip, $top, $count_total);
        return $response;
    }

    /**
     * Operation getFollowsWithHttpInfo
     *
     * Gets a list of followed records for the user
     *
     * @param  string $record_type Optional, filters followed records by a given record type. (optional)
     * @param  int $skip Optional, number of records to skip. (optional)
     * @param  int $top Optional, maximum number of records to return in the response. (optional)
     * @param  bool $count_total Optional, true if total number of records should be returned in the response headers. (optional, default to false)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\UserFollow[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getFollowsWithHttpInfo($record_type = null, $skip = null, $top = null, $count_total = 'false')
    {
        $returnType = '\Swagger\Client\Model\UserFollow[]';
        $request = $this->getFollowsRequest($record_type, $skip, $top, $count_total);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse()->getBody()->getContents()
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\UserFollow[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getFollowsAsync
     *
     * Gets a list of followed records for the user
     *
     * @param  string $record_type Optional, filters followed records by a given record type. (optional)
     * @param  int $skip Optional, number of records to skip. (optional)
     * @param  int $top Optional, maximum number of records to return in the response. (optional)
     * @param  bool $count_total Optional, true if total number of records should be returned in the response headers. (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFollowsAsync($record_type = null, $skip = null, $top = null, $count_total = 'false')
    {
        return $this->getFollowsAsyncWithHttpInfo($record_type, $skip, $top, $count_total)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFollowsAsyncWithHttpInfo
     *
     * Gets a list of followed records for the user
     *
     * @param  string $record_type Optional, filters followed records by a given record type. (optional)
     * @param  int $skip Optional, number of records to skip. (optional)
     * @param  int $top Optional, maximum number of records to return in the response. (optional)
     * @param  bool $count_total Optional, true if total number of records should be returned in the response headers. (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFollowsAsyncWithHttpInfo($record_type = null, $skip = null, $top = null, $count_total = 'false')
    {
        $returnType = '\Swagger\Client\Model\UserFollow[]';
        $request = $this->getFollowsRequest($record_type, $skip, $top, $count_total);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getFollows'
     *
     * @param  string $record_type Optional, filters followed records by a given record type. (optional)
     * @param  int $skip Optional, number of records to skip. (optional)
     * @param  int $top Optional, maximum number of records to return in the response. (optional)
     * @param  bool $count_total Optional, true if total number of records should be returned in the response headers. (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getFollowsRequest($record_type = null, $skip = null, $top = null, $count_total = 'false')
    {

        $resourcePath = '/Follows';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($record_type !== null) {
            $queryParams['record_type'] = ObjectSerializer::toQueryValue($record_type);
        }
        // query params
        if ($skip !== null) {
            $queryParams['skip'] = ObjectSerializer::toQueryValue($skip);
        }
        // query params
        if ($top !== null) {
            $queryParams['top'] = ObjectSerializer::toQueryValue($top);
        }
        // query params
        if ($count_total !== null) {
            $queryParams['count_total'] = ObjectSerializer::toQueryValue($count_total);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
