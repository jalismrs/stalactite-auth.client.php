# Jalismrs\Stalactite\Client\Auth\ClientAppsApi

All URIs are relative to https://stalactite.jalis.dev/auth.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createClientApp()**](ClientAppsApi.md#createClientApp) | **POST** /clientApps | 
[**deleteClientApp()**](ClientAppsApi.md#deleteClientApp) | **DELETE** /clientApps/{uid} | 
[**getClientApp()**](ClientAppsApi.md#getClientApp) | **GET** /clientApps/{uid} | 
[**getClientApps()**](ClientAppsApi.md#getClientApps) | **GET** /clientApps | 
[**updateClientApp()**](ClientAppsApi.md#updateClientApp) | **PUT** /clientApps/{uid} | 


## `createClientApp()`

```php
createClientApp($create_client_app_request): \Jalismrs\Stalactite\Client\Auth\Model\ClientApp
```



Create and get a clientApp

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Auth\Api\ClientAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_client_app_request = new \Jalismrs\Stalactite\Client\Auth\Model\CreateClientAppRequest(); // \Jalismrs\Stalactite\Client\Auth\Model\CreateClientAppRequest

try {
    $result = $apiInstance->createClientApp($create_client_app_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientAppsApi->createClientApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_client_app_request** | [**\Jalismrs\Stalactite\Client\Auth\Model\CreateClientAppRequest**](../Model/CreateClientAppRequest.md)|  |

### Return type

[**\Jalismrs\Stalactite\Client\Auth\Model\ClientApp**](../Model/ClientApp.md)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteClientApp()`

```php
deleteClientApp($uid)
```



Delete a clientApp based on its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Auth\Api\ClientAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string | The uid of the clientApp to delete

try {
    $apiInstance->deleteClientApp($uid);
} catch (Exception $e) {
    echo 'Exception when calling ClientAppsApi->deleteClientApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The uid of the clientApp to delete |

### Return type

void (empty response body)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClientApp()`

```php
getClientApp($uid): \Jalismrs\Stalactite\Client\Auth\Model\ClientApp
```



Get a clientApp by its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Auth\Api\ClientAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string | The uid of the clientApp to get

try {
    $result = $apiInstance->getClientApp($uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientAppsApi->getClientApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The uid of the clientApp to get |

### Return type

[**\Jalismrs\Stalactite\Client\Auth\Model\ClientApp**](../Model/ClientApp.md)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClientApps()`

```php
getClientApps($page, $name): \Jalismrs\Stalactite\Client\Auth\Model\GetClientAppsResponse
```



Get all clientApps with pagination support. A name filter can be applied

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Auth\Api\ClientAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Specify the page to get. default: 1
$name = 'name_example'; // string | Filter clientApps by name

try {
    $result = $apiInstance->getClientApps($page, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientAppsApi->getClientApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Specify the page to get. default: 1 | [optional]
 **name** | **string**| Filter clientApps by name | [optional]

### Return type

[**\Jalismrs\Stalactite\Client\Auth\Model\GetClientAppsResponse**](../Model/GetClientAppsResponse.md)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateClientApp()`

```php
updateClientApp($uid, $update_client_app_request)
```



Update a clientApp based on its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Auth\Api\ClientAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string | The uid of the clientApp to update
$update_client_app_request = new \Jalismrs\Stalactite\Client\Auth\Model\UpdateClientAppRequest(); // \Jalismrs\Stalactite\Client\Auth\Model\UpdateClientAppRequest

try {
    $apiInstance->updateClientApp($uid, $update_client_app_request);
} catch (Exception $e) {
    echo 'Exception when calling ClientAppsApi->updateClientApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The uid of the clientApp to update |
 **update_client_app_request** | [**\Jalismrs\Stalactite\Client\Auth\Model\UpdateClientAppRequest**](../Model/UpdateClientAppRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
