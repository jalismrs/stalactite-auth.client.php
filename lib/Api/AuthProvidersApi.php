<?php
/**
 * AuthProvidersApi
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
 * The version of the OpenAPI document: 1.0.0
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
 * AuthProvidersApi Class Doc Comment
 *
 * @category Class
 * @package  Jalismrs\Stalactite\Client\Auth
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AuthProvidersApi
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
     * Operation deleteAuthProvider
     *
     * @param  string $uid The uid of the authProvider to delete (required)
     *
     * @throws \Jalismrs\Stalactite\Client\Auth\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteAuthProvider($uid)
    {
        $this->deleteAuthProviderWithHttpInfo($uid);
    }

    /**
     * Operation deleteAuthProviderWithHttpInfo
     *
     * @param  string $uid The uid of the authProvider to delete (required)
     *
     * @throws \Jalismrs\Stalactite\Client\Auth\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteAuthProviderWithHttpInfo($uid)
    {
        $request = $this->deleteAuthProviderRequest($uid);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
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
     * Operation deleteAuthProviderAsync
     *
     * @param  string $uid The uid of the authProvider to delete (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAuthProviderAsync($uid)
    {
        return $this->deleteAuthProviderAsyncWithHttpInfo($uid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteAuthProviderAsyncWithHttpInfo
     *
     * @param  string $uid The uid of the authProvider to delete (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAuthProviderAsyncWithHttpInfo($uid)
    {
        $returnType = '';
        $request = $this->deleteAuthProviderRequest($uid);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'deleteAuthProvider'
     *
     * @param  string $uid The uid of the authProvider to delete (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteAuthProviderRequest($uid)
    {
        // verify the required parameter 'uid' is set
        if ($uid === null || (is_array($uid) && count($uid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $uid when calling deleteAuthProvider'
            );
        }
        if (!preg_match("/[a-z0-9]{64}/", $uid)) {
            throw new \InvalidArgumentException("invalid value for \"uid\" when calling AuthProvidersApi.deleteAuthProvider, must conform to the pattern /[a-z0-9]{64}/.");
        }


        $resourcePath = '/authProviders/{uid}';
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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateFirebaseAuthProvider
     *
     * @param  string $uid The uid of the Firebase authProvider to update (required)
     * @param  \Jalismrs\Stalactite\Client\Auth\Model\UpdateFirebaseAuthProviderRequest $update_firebase_auth_provider_request update_firebase_auth_provider_request (required)
     *
     * @throws \Jalismrs\Stalactite\Client\Auth\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function updateFirebaseAuthProvider($uid, $update_firebase_auth_provider_request)
    {
        $this->updateFirebaseAuthProviderWithHttpInfo($uid, $update_firebase_auth_provider_request);
    }

    /**
     * Operation updateFirebaseAuthProviderWithHttpInfo
     *
     * @param  string $uid The uid of the Firebase authProvider to update (required)
     * @param  \Jalismrs\Stalactite\Client\Auth\Model\UpdateFirebaseAuthProviderRequest $update_firebase_auth_provider_request (required)
     *
     * @throws \Jalismrs\Stalactite\Client\Auth\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateFirebaseAuthProviderWithHttpInfo($uid, $update_firebase_auth_provider_request)
    {
        $request = $this->updateFirebaseAuthProviderRequest($uid, $update_firebase_auth_provider_request);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
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
     * Operation updateFirebaseAuthProviderAsync
     *
     * @param  string $uid The uid of the Firebase authProvider to update (required)
     * @param  \Jalismrs\Stalactite\Client\Auth\Model\UpdateFirebaseAuthProviderRequest $update_firebase_auth_provider_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateFirebaseAuthProviderAsync($uid, $update_firebase_auth_provider_request)
    {
        return $this->updateFirebaseAuthProviderAsyncWithHttpInfo($uid, $update_firebase_auth_provider_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateFirebaseAuthProviderAsyncWithHttpInfo
     *
     * @param  string $uid The uid of the Firebase authProvider to update (required)
     * @param  \Jalismrs\Stalactite\Client\Auth\Model\UpdateFirebaseAuthProviderRequest $update_firebase_auth_provider_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateFirebaseAuthProviderAsyncWithHttpInfo($uid, $update_firebase_auth_provider_request)
    {
        $returnType = '';
        $request = $this->updateFirebaseAuthProviderRequest($uid, $update_firebase_auth_provider_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'updateFirebaseAuthProvider'
     *
     * @param  string $uid The uid of the Firebase authProvider to update (required)
     * @param  \Jalismrs\Stalactite\Client\Auth\Model\UpdateFirebaseAuthProviderRequest $update_firebase_auth_provider_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateFirebaseAuthProviderRequest($uid, $update_firebase_auth_provider_request)
    {
        // verify the required parameter 'uid' is set
        if ($uid === null || (is_array($uid) && count($uid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $uid when calling updateFirebaseAuthProvider'
            );
        }
        if (!preg_match("/[a-z0-9]{64}/", $uid)) {
            throw new \InvalidArgumentException("invalid value for \"uid\" when calling AuthProvidersApi.updateFirebaseAuthProvider, must conform to the pattern /[a-z0-9]{64}/.");
        }

        // verify the required parameter 'update_firebase_auth_provider_request' is set
        if ($update_firebase_auth_provider_request === null || (is_array($update_firebase_auth_provider_request) && count($update_firebase_auth_provider_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $update_firebase_auth_provider_request when calling updateFirebaseAuthProvider'
            );
        }

        $resourcePath = '/authProviders/firebase/{uid}';
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
        if (isset($update_firebase_auth_provider_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($update_firebase_auth_provider_request));
            } else {
                $httpBody = $update_firebase_auth_provider_request;
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
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateGoogleAuthProvider
     *
     * @param  string $uid The uid of the Google authProvider to update (required)
     * @param  \Jalismrs\Stalactite\Client\Auth\Model\UpdateGoogleAuthProviderRequest $update_google_auth_provider_request update_google_auth_provider_request (required)
     *
     * @throws \Jalismrs\Stalactite\Client\Auth\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function updateGoogleAuthProvider($uid, $update_google_auth_provider_request)
    {
        $this->updateGoogleAuthProviderWithHttpInfo($uid, $update_google_auth_provider_request);
    }

    /**
     * Operation updateGoogleAuthProviderWithHttpInfo
     *
     * @param  string $uid The uid of the Google authProvider to update (required)
     * @param  \Jalismrs\Stalactite\Client\Auth\Model\UpdateGoogleAuthProviderRequest $update_google_auth_provider_request (required)
     *
     * @throws \Jalismrs\Stalactite\Client\Auth\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateGoogleAuthProviderWithHttpInfo($uid, $update_google_auth_provider_request)
    {
        $request = $this->updateGoogleAuthProviderRequest($uid, $update_google_auth_provider_request);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
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
     * Operation updateGoogleAuthProviderAsync
     *
     * @param  string $uid The uid of the Google authProvider to update (required)
     * @param  \Jalismrs\Stalactite\Client\Auth\Model\UpdateGoogleAuthProviderRequest $update_google_auth_provider_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateGoogleAuthProviderAsync($uid, $update_google_auth_provider_request)
    {
        return $this->updateGoogleAuthProviderAsyncWithHttpInfo($uid, $update_google_auth_provider_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateGoogleAuthProviderAsyncWithHttpInfo
     *
     * @param  string $uid The uid of the Google authProvider to update (required)
     * @param  \Jalismrs\Stalactite\Client\Auth\Model\UpdateGoogleAuthProviderRequest $update_google_auth_provider_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateGoogleAuthProviderAsyncWithHttpInfo($uid, $update_google_auth_provider_request)
    {
        $returnType = '';
        $request = $this->updateGoogleAuthProviderRequest($uid, $update_google_auth_provider_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'updateGoogleAuthProvider'
     *
     * @param  string $uid The uid of the Google authProvider to update (required)
     * @param  \Jalismrs\Stalactite\Client\Auth\Model\UpdateGoogleAuthProviderRequest $update_google_auth_provider_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateGoogleAuthProviderRequest($uid, $update_google_auth_provider_request)
    {
        // verify the required parameter 'uid' is set
        if ($uid === null || (is_array($uid) && count($uid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $uid when calling updateGoogleAuthProvider'
            );
        }
        if (!preg_match("/[a-z0-9]{64}/", $uid)) {
            throw new \InvalidArgumentException("invalid value for \"uid\" when calling AuthProvidersApi.updateGoogleAuthProvider, must conform to the pattern /[a-z0-9]{64}/.");
        }

        // verify the required parameter 'update_google_auth_provider_request' is set
        if ($update_google_auth_provider_request === null || (is_array($update_google_auth_provider_request) && count($update_google_auth_provider_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $update_google_auth_provider_request when calling updateGoogleAuthProvider'
            );
        }

        $resourcePath = '/authProviders/google/{uid}';
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
        if (isset($update_google_auth_provider_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($update_google_auth_provider_request));
            } else {
                $httpBody = $update_google_auth_provider_request;
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
            'PUT',
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
