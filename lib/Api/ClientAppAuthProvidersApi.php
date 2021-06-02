<?php
/**
 * ClientAppAuthProvidersApi
 * PHP version 7.2
 *
 * @category Class
 * @package  Jalismrs\Stalactite\Client\Auth
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Stalactite Auth API client
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: /dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Jalismrs\Stalactite\Client\Auth\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Jalismrs\Stalactite\Client\Auth\ApiException;
use Jalismrs\Stalactite\Client\Auth\Configuration;
use Jalismrs\Stalactite\Client\Auth\HeaderSelector;
use Jalismrs\Stalactite\Client\Auth\ObjectSerializer;

/**
 * ClientAppAuthProvidersApi Class Doc Comment
 *
 * @category Class
 * @package  Jalismrs\Stalactite\Client\Auth
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ClientAppAuthProvidersApi
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
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation createFirebaseAuthProvider
     *
     * @param  string $uid The uid of the clientApp to which to link a new Firebase authProvider (required)
     * @param  \Jalismrs\Stalactite\Client\Auth\Model\CreateFirebaseAuthProviderRequest $create_firebase_auth_provider_request create_firebase_auth_provider_request (required)
     *
     * @throws \Jalismrs\Stalactite\Client\Auth\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Jalismrs\Stalactite\Client\Auth\Model\FirebaseAuthProvider|\Jalismrs\Stalactite\Client\Auth\Model\ApiError
     */
    public function createFirebaseAuthProvider($uid, $create_firebase_auth_provider_request)
    {
        list($response) = $this->createFirebaseAuthProviderWithHttpInfo($uid, $create_firebase_auth_provider_request);
        return $response;
    }

    /**
     * Operation createFirebaseAuthProviderWithHttpInfo
     *
     * @param  string $uid The uid of the clientApp to which to link a new Firebase authProvider (required)
     * @param  \Jalismrs\Stalactite\Client\Auth\Model\CreateFirebaseAuthProviderRequest $create_firebase_auth_provider_request (required)
     *
     * @throws \Jalismrs\Stalactite\Client\Auth\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Jalismrs\Stalactite\Client\Auth\Model\FirebaseAuthProvider|\Jalismrs\Stalactite\Client\Auth\Model\ApiError, HTTP status code, HTTP response headers (array of strings)
     */
    public function createFirebaseAuthProviderWithHttpInfo($uid, $create_firebase_auth_provider_request)
    {
        $request = $this->createFirebaseAuthProviderRequest($uid, $create_firebase_auth_provider_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Jalismrs\Stalactite\Client\Auth\Model\FirebaseAuthProvider' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Jalismrs\Stalactite\Client\Auth\Model\FirebaseAuthProvider', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\Jalismrs\Stalactite\Client\Auth\Model\ApiError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Jalismrs\Stalactite\Client\Auth\Model\ApiError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Jalismrs\Stalactite\Client\Auth\Model\FirebaseAuthProvider';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\Jalismrs\Stalactite\Client\Auth\Model\FirebaseAuthProvider',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Jalismrs\Stalactite\Client\Auth\Model\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createFirebaseAuthProviderAsync
     *
     * @param  string $uid The uid of the clientApp to which to link a new Firebase authProvider (required)
     * @param  \Jalismrs\Stalactite\Client\Auth\Model\CreateFirebaseAuthProviderRequest $create_firebase_auth_provider_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createFirebaseAuthProviderAsync($uid, $create_firebase_auth_provider_request)
    {
        return $this->createFirebaseAuthProviderAsyncWithHttpInfo($uid, $create_firebase_auth_provider_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createFirebaseAuthProviderAsyncWithHttpInfo
     *
     * @param  string $uid The uid of the clientApp to which to link a new Firebase authProvider (required)
     * @param  \Jalismrs\Stalactite\Client\Auth\Model\CreateFirebaseAuthProviderRequest $create_firebase_auth_provider_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createFirebaseAuthProviderAsyncWithHttpInfo($uid, $create_firebase_auth_provider_request)
    {
        $returnType = '\Jalismrs\Stalactite\Client\Auth\Model\FirebaseAuthProvider';
        $request = $this->createFirebaseAuthProviderRequest($uid, $create_firebase_auth_provider_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createFirebaseAuthProvider'
     *
     * @param  string $uid The uid of the clientApp to which to link a new Firebase authProvider (required)
     * @param  \Jalismrs\Stalactite\Client\Auth\Model\CreateFirebaseAuthProviderRequest $create_firebase_auth_provider_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createFirebaseAuthProviderRequest($uid, $create_firebase_auth_provider_request)
    {
        // verify the required parameter 'uid' is set
        if ($uid === null || (is_array($uid) && count($uid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $uid when calling createFirebaseAuthProvider'
            );
        }
        // verify the required parameter 'create_firebase_auth_provider_request' is set
        if ($create_firebase_auth_provider_request === null || (is_array($create_firebase_auth_provider_request) && count($create_firebase_auth_provider_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $create_firebase_auth_provider_request when calling createFirebaseAuthProvider'
            );
        }

        $resourcePath = '/clientApps/{uid}/authProviders/firebase';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($uid !== null) {
            $resourcePath = str_replace(
                '{' . 'uid' . '}',
                ObjectSerializer::toPathValue($uid),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($create_firebase_auth_provider_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($create_firebase_auth_provider_request));
            } else {
                $httpBody = $create_firebase_auth_provider_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-TOKEN');
        if ($apiKey !== null) {
            $headers['X-API-TOKEN'] = $apiKey;
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createGoogleAuthProvider
     *
     * @param  string $uid The uid of the clientApp to which to link a new Google authProvider (required)
     * @param  \Jalismrs\Stalactite\Client\Auth\Model\CreateGoogleAuthProviderRequest $create_google_auth_provider_request create_google_auth_provider_request (required)
     *
     * @throws \Jalismrs\Stalactite\Client\Auth\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Jalismrs\Stalactite\Client\Auth\Model\GoogleAuthProvider|\Jalismrs\Stalactite\Client\Auth\Model\ApiError
     */
    public function createGoogleAuthProvider($uid, $create_google_auth_provider_request)
    {
        list($response) = $this->createGoogleAuthProviderWithHttpInfo($uid, $create_google_auth_provider_request);
        return $response;
    }

    /**
     * Operation createGoogleAuthProviderWithHttpInfo
     *
     * @param  string $uid The uid of the clientApp to which to link a new Google authProvider (required)
     * @param  \Jalismrs\Stalactite\Client\Auth\Model\CreateGoogleAuthProviderRequest $create_google_auth_provider_request (required)
     *
     * @throws \Jalismrs\Stalactite\Client\Auth\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Jalismrs\Stalactite\Client\Auth\Model\GoogleAuthProvider|\Jalismrs\Stalactite\Client\Auth\Model\ApiError, HTTP status code, HTTP response headers (array of strings)
     */
    public function createGoogleAuthProviderWithHttpInfo($uid, $create_google_auth_provider_request)
    {
        $request = $this->createGoogleAuthProviderRequest($uid, $create_google_auth_provider_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Jalismrs\Stalactite\Client\Auth\Model\GoogleAuthProvider' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Jalismrs\Stalactite\Client\Auth\Model\GoogleAuthProvider', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\Jalismrs\Stalactite\Client\Auth\Model\ApiError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Jalismrs\Stalactite\Client\Auth\Model\ApiError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Jalismrs\Stalactite\Client\Auth\Model\GoogleAuthProvider';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\Jalismrs\Stalactite\Client\Auth\Model\GoogleAuthProvider',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Jalismrs\Stalactite\Client\Auth\Model\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createGoogleAuthProviderAsync
     *
     * @param  string $uid The uid of the clientApp to which to link a new Google authProvider (required)
     * @param  \Jalismrs\Stalactite\Client\Auth\Model\CreateGoogleAuthProviderRequest $create_google_auth_provider_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createGoogleAuthProviderAsync($uid, $create_google_auth_provider_request)
    {
        return $this->createGoogleAuthProviderAsyncWithHttpInfo($uid, $create_google_auth_provider_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createGoogleAuthProviderAsyncWithHttpInfo
     *
     * @param  string $uid The uid of the clientApp to which to link a new Google authProvider (required)
     * @param  \Jalismrs\Stalactite\Client\Auth\Model\CreateGoogleAuthProviderRequest $create_google_auth_provider_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createGoogleAuthProviderAsyncWithHttpInfo($uid, $create_google_auth_provider_request)
    {
        $returnType = '\Jalismrs\Stalactite\Client\Auth\Model\GoogleAuthProvider';
        $request = $this->createGoogleAuthProviderRequest($uid, $create_google_auth_provider_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createGoogleAuthProvider'
     *
     * @param  string $uid The uid of the clientApp to which to link a new Google authProvider (required)
     * @param  \Jalismrs\Stalactite\Client\Auth\Model\CreateGoogleAuthProviderRequest $create_google_auth_provider_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createGoogleAuthProviderRequest($uid, $create_google_auth_provider_request)
    {
        // verify the required parameter 'uid' is set
        if ($uid === null || (is_array($uid) && count($uid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $uid when calling createGoogleAuthProvider'
            );
        }
        // verify the required parameter 'create_google_auth_provider_request' is set
        if ($create_google_auth_provider_request === null || (is_array($create_google_auth_provider_request) && count($create_google_auth_provider_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $create_google_auth_provider_request when calling createGoogleAuthProvider'
            );
        }

        $resourcePath = '/clientApps/{uid}/authProviders/google';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($uid !== null) {
            $resourcePath = str_replace(
                '{' . 'uid' . '}',
                ObjectSerializer::toPathValue($uid),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($create_google_auth_provider_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($create_google_auth_provider_request));
            } else {
                $httpBody = $create_google_auth_provider_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-TOKEN');
        if ($apiKey !== null) {
            $headers['X-API-TOKEN'] = $apiKey;
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAllClientAppAuthProviders
     *
     * @param  string $uid The uid of the clientApp (required)
     *
     * @throws \Jalismrs\Stalactite\Client\Auth\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Jalismrs\Stalactite\Client\Auth\Model\GetClientAppAuthProvidersResponse|\Jalismrs\Stalactite\Client\Auth\Model\ApiError
     */
    public function getAllClientAppAuthProviders($uid)
    {
        list($response) = $this->getAllClientAppAuthProvidersWithHttpInfo($uid);
        return $response;
    }

    /**
     * Operation getAllClientAppAuthProvidersWithHttpInfo
     *
     * @param  string $uid The uid of the clientApp (required)
     *
     * @throws \Jalismrs\Stalactite\Client\Auth\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Jalismrs\Stalactite\Client\Auth\Model\GetClientAppAuthProvidersResponse|\Jalismrs\Stalactite\Client\Auth\Model\ApiError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllClientAppAuthProvidersWithHttpInfo($uid)
    {
        $request = $this->getAllClientAppAuthProvidersRequest($uid);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Jalismrs\Stalactite\Client\Auth\Model\GetClientAppAuthProvidersResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Jalismrs\Stalactite\Client\Auth\Model\GetClientAppAuthProvidersResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\Jalismrs\Stalactite\Client\Auth\Model\ApiError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Jalismrs\Stalactite\Client\Auth\Model\ApiError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Jalismrs\Stalactite\Client\Auth\Model\GetClientAppAuthProvidersResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\Jalismrs\Stalactite\Client\Auth\Model\GetClientAppAuthProvidersResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Jalismrs\Stalactite\Client\Auth\Model\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAllClientAppAuthProvidersAsync
     *
     * @param  string $uid The uid of the clientApp (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllClientAppAuthProvidersAsync($uid)
    {
        return $this->getAllClientAppAuthProvidersAsyncWithHttpInfo($uid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAllClientAppAuthProvidersAsyncWithHttpInfo
     *
     * @param  string $uid The uid of the clientApp (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllClientAppAuthProvidersAsyncWithHttpInfo($uid)
    {
        $returnType = '\Jalismrs\Stalactite\Client\Auth\Model\GetClientAppAuthProvidersResponse';
        $request = $this->getAllClientAppAuthProvidersRequest($uid);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAllClientAppAuthProviders'
     *
     * @param  string $uid The uid of the clientApp (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAllClientAppAuthProvidersRequest($uid)
    {
        // verify the required parameter 'uid' is set
        if ($uid === null || (is_array($uid) && count($uid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $uid when calling getAllClientAppAuthProviders'
            );
        }

        $resourcePath = '/clientApps/{uid}/authProviders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($uid !== null) {
            $resourcePath = str_replace(
                '{' . 'uid' . '}',
                ObjectSerializer::toPathValue($uid),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-TOKEN');
        if ($apiKey !== null) {
            $headers['X-API-TOKEN'] = $apiKey;
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
