<?php
/**
 * ClientAppAuthProvidersApi
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Stalactite Auth API client
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 0.0.0-test.1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * ClientAppAuthProvidersApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
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
    public function setHostIndex($hostIndex)
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
     * @param  string $client_app_uid The uid of the clientApp to which to link a new Firebase authProvider (required)
     * @param  \OpenAPI\Client\Model\CreateFirebaseAuthProviderRequest $create_firebase_auth_provider_request create_firebase_auth_provider_request (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\FirebaseAuthProvider|\OpenAPI\Client\Model\ApiError
     */
    public function createFirebaseAuthProvider($client_app_uid, $create_firebase_auth_provider_request)
    {
        list($response) = $this->createFirebaseAuthProviderWithHttpInfo($client_app_uid, $create_firebase_auth_provider_request);
        return $response;
    }

    /**
     * Operation createFirebaseAuthProviderWithHttpInfo
     *
     * @param  string $client_app_uid The uid of the clientApp to which to link a new Firebase authProvider (required)
     * @param  \OpenAPI\Client\Model\CreateFirebaseAuthProviderRequest $create_firebase_auth_provider_request (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\FirebaseAuthProvider|\OpenAPI\Client\Model\ApiError, HTTP status code, HTTP response headers (array of strings)
     */
    public function createFirebaseAuthProviderWithHttpInfo($client_app_uid, $create_firebase_auth_provider_request)
    {
        $request = $this->createFirebaseAuthProviderRequest($client_app_uid, $create_firebase_auth_provider_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
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
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\FirebaseAuthProvider' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\FirebaseAuthProvider', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\OpenAPI\Client\Model\ApiError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ApiError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\FirebaseAuthProvider';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\OpenAPI\Client\Model\FirebaseAuthProvider',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ApiError',
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
     * 
     *
     * @param  string $client_app_uid The uid of the clientApp to which to link a new Firebase authProvider (required)
     * @param  \OpenAPI\Client\Model\CreateFirebaseAuthProviderRequest $create_firebase_auth_provider_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createFirebaseAuthProviderAsync($client_app_uid, $create_firebase_auth_provider_request)
    {
        return $this->createFirebaseAuthProviderAsyncWithHttpInfo($client_app_uid, $create_firebase_auth_provider_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createFirebaseAuthProviderAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $client_app_uid The uid of the clientApp to which to link a new Firebase authProvider (required)
     * @param  \OpenAPI\Client\Model\CreateFirebaseAuthProviderRequest $create_firebase_auth_provider_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createFirebaseAuthProviderAsyncWithHttpInfo($client_app_uid, $create_firebase_auth_provider_request)
    {
        $returnType = '\OpenAPI\Client\Model\FirebaseAuthProvider';
        $request = $this->createFirebaseAuthProviderRequest($client_app_uid, $create_firebase_auth_provider_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
     * Create request for operation 'createFirebaseAuthProvider'
     *
     * @param  string $client_app_uid The uid of the clientApp to which to link a new Firebase authProvider (required)
     * @param  \OpenAPI\Client\Model\CreateFirebaseAuthProviderRequest $create_firebase_auth_provider_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createFirebaseAuthProviderRequest($client_app_uid, $create_firebase_auth_provider_request)
    {
        // verify the required parameter 'client_app_uid' is set
        if ($client_app_uid === null || (is_array($client_app_uid) && count($client_app_uid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client_app_uid when calling createFirebaseAuthProvider'
            );
        }
        if (!preg_match("/[a-z0-9]{64}/", $client_app_uid)) {
            throw new \InvalidArgumentException("invalid value for \"client_app_uid\" when calling ClientAppAuthProvidersApi.createFirebaseAuthProvider, must conform to the pattern /[a-z0-9]{64}/.");
        }

        // verify the required parameter 'create_firebase_auth_provider_request' is set
        if ($create_firebase_auth_provider_request === null || (is_array($create_firebase_auth_provider_request) && count($create_firebase_auth_provider_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $create_firebase_auth_provider_request when calling createFirebaseAuthProvider'
            );
        }

        $resourcePath = '/clientApps/{clientAppUid}/authProviders/firebase';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($client_app_uid !== null) {
            $resourcePath = str_replace(
                '{' . 'clientAppUid' . '}',
                ObjectSerializer::toPathValue($client_app_uid),
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
     * @param  string $client_app_uid The uid of the clientApp to which to link a new Google authProvider (required)
     * @param  \OpenAPI\Client\Model\CreateGoogleAuthProviderRequest $create_google_auth_provider_request create_google_auth_provider_request (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\GoogleAuthProvider|\OpenAPI\Client\Model\ApiError
     */
    public function createGoogleAuthProvider($client_app_uid, $create_google_auth_provider_request)
    {
        list($response) = $this->createGoogleAuthProviderWithHttpInfo($client_app_uid, $create_google_auth_provider_request);
        return $response;
    }

    /**
     * Operation createGoogleAuthProviderWithHttpInfo
     *
     * @param  string $client_app_uid The uid of the clientApp to which to link a new Google authProvider (required)
     * @param  \OpenAPI\Client\Model\CreateGoogleAuthProviderRequest $create_google_auth_provider_request (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\GoogleAuthProvider|\OpenAPI\Client\Model\ApiError, HTTP status code, HTTP response headers (array of strings)
     */
    public function createGoogleAuthProviderWithHttpInfo($client_app_uid, $create_google_auth_provider_request)
    {
        $request = $this->createGoogleAuthProviderRequest($client_app_uid, $create_google_auth_provider_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
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
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\GoogleAuthProvider' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\GoogleAuthProvider', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\OpenAPI\Client\Model\ApiError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ApiError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\GoogleAuthProvider';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\OpenAPI\Client\Model\GoogleAuthProvider',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ApiError',
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
     * 
     *
     * @param  string $client_app_uid The uid of the clientApp to which to link a new Google authProvider (required)
     * @param  \OpenAPI\Client\Model\CreateGoogleAuthProviderRequest $create_google_auth_provider_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createGoogleAuthProviderAsync($client_app_uid, $create_google_auth_provider_request)
    {
        return $this->createGoogleAuthProviderAsyncWithHttpInfo($client_app_uid, $create_google_auth_provider_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createGoogleAuthProviderAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $client_app_uid The uid of the clientApp to which to link a new Google authProvider (required)
     * @param  \OpenAPI\Client\Model\CreateGoogleAuthProviderRequest $create_google_auth_provider_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createGoogleAuthProviderAsyncWithHttpInfo($client_app_uid, $create_google_auth_provider_request)
    {
        $returnType = '\OpenAPI\Client\Model\GoogleAuthProvider';
        $request = $this->createGoogleAuthProviderRequest($client_app_uid, $create_google_auth_provider_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
     * Create request for operation 'createGoogleAuthProvider'
     *
     * @param  string $client_app_uid The uid of the clientApp to which to link a new Google authProvider (required)
     * @param  \OpenAPI\Client\Model\CreateGoogleAuthProviderRequest $create_google_auth_provider_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createGoogleAuthProviderRequest($client_app_uid, $create_google_auth_provider_request)
    {
        // verify the required parameter 'client_app_uid' is set
        if ($client_app_uid === null || (is_array($client_app_uid) && count($client_app_uid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client_app_uid when calling createGoogleAuthProvider'
            );
        }
        if (!preg_match("/[a-z0-9]{64}/", $client_app_uid)) {
            throw new \InvalidArgumentException("invalid value for \"client_app_uid\" when calling ClientAppAuthProvidersApi.createGoogleAuthProvider, must conform to the pattern /[a-z0-9]{64}/.");
        }

        // verify the required parameter 'create_google_auth_provider_request' is set
        if ($create_google_auth_provider_request === null || (is_array($create_google_auth_provider_request) && count($create_google_auth_provider_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $create_google_auth_provider_request when calling createGoogleAuthProvider'
            );
        }

        $resourcePath = '/clientApps/{clientAppUid}/authProviders/google';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($client_app_uid !== null) {
            $resourcePath = str_replace(
                '{' . 'clientAppUid' . '}',
                ObjectSerializer::toPathValue($client_app_uid),
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
     * @param  string $client_app_uid The uid of the clientApp (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\GetClientAppAuthProvidersResponse|\OpenAPI\Client\Model\ApiError
     */
    public function getAllClientAppAuthProviders($client_app_uid)
    {
        list($response) = $this->getAllClientAppAuthProvidersWithHttpInfo($client_app_uid);
        return $response;
    }

    /**
     * Operation getAllClientAppAuthProvidersWithHttpInfo
     *
     * @param  string $client_app_uid The uid of the clientApp (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\GetClientAppAuthProvidersResponse|\OpenAPI\Client\Model\ApiError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllClientAppAuthProvidersWithHttpInfo($client_app_uid)
    {
        $request = $this->getAllClientAppAuthProvidersRequest($client_app_uid);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
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
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\GetClientAppAuthProvidersResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\GetClientAppAuthProvidersResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\OpenAPI\Client\Model\ApiError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ApiError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\GetClientAppAuthProvidersResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\OpenAPI\Client\Model\GetClientAppAuthProvidersResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ApiError',
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
     * 
     *
     * @param  string $client_app_uid The uid of the clientApp (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllClientAppAuthProvidersAsync($client_app_uid)
    {
        return $this->getAllClientAppAuthProvidersAsyncWithHttpInfo($client_app_uid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAllClientAppAuthProvidersAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $client_app_uid The uid of the clientApp (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllClientAppAuthProvidersAsyncWithHttpInfo($client_app_uid)
    {
        $returnType = '\OpenAPI\Client\Model\GetClientAppAuthProvidersResponse';
        $request = $this->getAllClientAppAuthProvidersRequest($client_app_uid);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
     * Create request for operation 'getAllClientAppAuthProviders'
     *
     * @param  string $client_app_uid The uid of the clientApp (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAllClientAppAuthProvidersRequest($client_app_uid)
    {
        // verify the required parameter 'client_app_uid' is set
        if ($client_app_uid === null || (is_array($client_app_uid) && count($client_app_uid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client_app_uid when calling getAllClientAppAuthProviders'
            );
        }
        if (!preg_match("/[a-z0-9]{64}/", $client_app_uid)) {
            throw new \InvalidArgumentException("invalid value for \"client_app_uid\" when calling ClientAppAuthProvidersApi.getAllClientAppAuthProviders, must conform to the pattern /[a-z0-9]{64}/.");
        }


        $resourcePath = '/clientApps/{clientAppUid}/authProviders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($client_app_uid !== null) {
            $resourcePath = str_replace(
                '{' . 'clientAppUid' . '}',
                ObjectSerializer::toPathValue($client_app_uid),
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