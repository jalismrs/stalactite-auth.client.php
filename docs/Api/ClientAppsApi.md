# OpenAPI\Client\ClientAppsApi

All URIs are relative to https://stalactite.jalis.pro/auth.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createClientApp()**](ClientAppsApi.md#createClientApp) | **POST** /clientApps | 
[**deleteClientApp()**](ClientAppsApi.md#deleteClientApp) | **DELETE** /clientApps/{uid} | 
[**getClientApp()**](ClientAppsApi.md#getClientApp) | **GET** /clientApps/{uid} | 
[**getClientApps()**](ClientAppsApi.md#getClientApps) | **GET** /clientApps | 
[**updateClientApp()**](ClientAppsApi.md#updateClientApp) | **PUT** /clientApps/{uid} | 


## `createClientApp()`

```php
createClientApp($create_client_app_request): \OpenAPI\Client\Model\ClientApp
```



Create and get a clientApp

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClientAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_client_app_request = new \OpenAPI\Client\Model\CreateClientAppRequest(); // \OpenAPI\Client\Model\CreateClientAppRequest

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
 **create_client_app_request** | [**\OpenAPI\Client\Model\CreateClientAppRequest**](../Model/CreateClientAppRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ClientApp**](../Model/ClientApp.md)

### Authorization

No authorization required

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



$apiInstance = new OpenAPI\Client\Api\ClientAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClientApp()`

```php
getClientApp($uid): \OpenAPI\Client\Model\ClientApp
```



Get a clientApp by its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClientAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

[**\OpenAPI\Client\Model\ClientApp**](../Model/ClientApp.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClientApps()`

```php
getClientApps($name, $page): \OpenAPI\Client\Model\GetClientAppsResponse
```



Get all clientApps with pagination support. A name filter can be applied

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClientAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Filter clientApps by name
$page = 56; // int | Specify the page to get. default: 1

try {
    $result = $apiInstance->getClientApps($name, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientAppsApi->getClientApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filter clientApps by name | [optional]
 **page** | **int**| Specify the page to get. default: 1 | [optional]

### Return type

[**\OpenAPI\Client\Model\GetClientAppsResponse**](../Model/GetClientAppsResponse.md)

### Authorization

No authorization required

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



$apiInstance = new OpenAPI\Client\Api\ClientAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uid = 'uid_example'; // string | The uid of the clientApp to update
$update_client_app_request = new \OpenAPI\Client\Model\UpdateClientAppRequest(); // \OpenAPI\Client\Model\UpdateClientAppRequest

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
 **update_client_app_request** | [**\OpenAPI\Client\Model\UpdateClientAppRequest**](../Model/UpdateClientAppRequest.md)|  |

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
