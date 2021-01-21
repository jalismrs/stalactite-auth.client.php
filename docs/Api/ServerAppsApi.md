# Jalismrs\Stalactite\Client\Auth\ServerAppsApi

All URIs are relative to https://stalactite.jalis.dev/auth.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createServerApp()**](ServerAppsApi.md#createServerApp) | **POST** /serverApps | 
[**deleteServerApp()**](ServerAppsApi.md#deleteServerApp) | **DELETE** /serverApps/{uid} | 
[**getServerApp()**](ServerAppsApi.md#getServerApp) | **GET** /serverApps/{uid} | 
[**getServerApps()**](ServerAppsApi.md#getServerApps) | **GET** /serverApps | 
[**resetServerAppTokenSignatureKey()**](ServerAppsApi.md#resetServerAppTokenSignatureKey) | **PUT** /serverApps/{uid}/tokenSignatureKey/reset | 
[**updateServerApp()**](ServerAppsApi.md#updateServerApp) | **PUT** /serverApps/{uid} | 


## `createServerApp()`

```php
createServerApp($create_server_app_request): \Jalismrs\Stalactite\Client\Auth\Model\ServerApp
```



Create and get a serverApp

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Jalismrs\Stalactite\Client\Auth\Api\ServerAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_server_app_request = new \Jalismrs\Stalactite\Client\Auth\Model\CreateServerAppRequest(); // \Jalismrs\Stalactite\Client\Auth\Model\CreateServerAppRequest

try {
    $result = $apiInstance->createServerApp($create_server_app_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerAppsApi->createServerApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_server_app_request** | [**\Jalismrs\Stalactite\Client\Auth\Model\CreateServerAppRequest**](../Model/CreateServerAppRequest.md)|  |

### Return type

[**\Jalismrs\Stalactite\Client\Auth\Model\ServerApp**](../Model/ServerApp.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteServerApp()`

```php
deleteServerApp($uid)
```



Delete a serverApp based on its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Jalismrs\Stalactite\Client\Auth\Api\ServerAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uid = 'uid_example'; // string | The uid of the serverApp to delete

try {
    $apiInstance->deleteServerApp($uid);
} catch (Exception $e) {
    echo 'Exception when calling ServerAppsApi->deleteServerApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The uid of the serverApp to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerApp()`

```php
getServerApp($uid): \Jalismrs\Stalactite\Client\Auth\Model\ServerApp
```



Get a serverApp by its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Jalismrs\Stalactite\Client\Auth\Api\ServerAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uid = 'uid_example'; // string | The uid of the serverApp to get

try {
    $result = $apiInstance->getServerApp($uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerAppsApi->getServerApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The uid of the serverApp to get |

### Return type

[**\Jalismrs\Stalactite\Client\Auth\Model\ServerApp**](../Model/ServerApp.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerApps()`

```php
getServerApps($name, $page): \Jalismrs\Stalactite\Client\Auth\Model\GetServerAppsResponse
```



Get all serverApps with pagination support. A name filter can be applied

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Jalismrs\Stalactite\Client\Auth\Api\ServerAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Filter serverApps by name
$page = 56; // int | Specify the page to get. default: 1

try {
    $result = $apiInstance->getServerApps($name, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerAppsApi->getServerApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filter serverApps by name | [optional]
 **page** | **int**| Specify the page to get. default: 1 | [optional]

### Return type

[**\Jalismrs\Stalactite\Client\Auth\Model\GetServerAppsResponse**](../Model/GetServerAppsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetServerAppTokenSignatureKey()`

```php
resetServerAppTokenSignatureKey($uid, $reset_server_app_token_signature_key_request): \Jalismrs\Stalactite\Client\Auth\Model\ServerApp
```



Reset a serverApp token signature key based on its uid and its current key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Jalismrs\Stalactite\Client\Auth\Api\ServerAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uid = 'uid_example'; // string | The uid of the serverApp to reset its token signature key
$reset_server_app_token_signature_key_request = new \Jalismrs\Stalactite\Client\Auth\Model\ResetServerAppTokenSignatureKeyRequest(); // \Jalismrs\Stalactite\Client\Auth\Model\ResetServerAppTokenSignatureKeyRequest

try {
    $result = $apiInstance->resetServerAppTokenSignatureKey($uid, $reset_server_app_token_signature_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerAppsApi->resetServerAppTokenSignatureKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The uid of the serverApp to reset its token signature key |
 **reset_server_app_token_signature_key_request** | [**\Jalismrs\Stalactite\Client\Auth\Model\ResetServerAppTokenSignatureKeyRequest**](../Model/ResetServerAppTokenSignatureKeyRequest.md)|  |

### Return type

[**\Jalismrs\Stalactite\Client\Auth\Model\ServerApp**](../Model/ServerApp.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateServerApp()`

```php
updateServerApp($uid, $update_server_app_request)
```



Update a serverApp based on its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Jalismrs\Stalactite\Client\Auth\Api\ServerAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uid = 'uid_example'; // string | The uid of the serverApp to update
$update_server_app_request = new \Jalismrs\Stalactite\Client\Auth\Model\UpdateServerAppRequest(); // \Jalismrs\Stalactite\Client\Auth\Model\UpdateServerAppRequest

try {
    $apiInstance->updateServerApp($uid, $update_server_app_request);
} catch (Exception $e) {
    echo 'Exception when calling ServerAppsApi->updateServerApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The uid of the serverApp to update |
 **update_server_app_request** | [**\Jalismrs\Stalactite\Client\Auth\Model\UpdateServerAppRequest**](../Model/UpdateServerAppRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
