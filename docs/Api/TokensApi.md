# OpenAPI\Client\TokensApi

All URIs are relative to https://stalactite.jalis.pro/auth.

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkToken()**](TokensApi.md#checkToken) | **HEAD** /tokens | 
[**login()**](TokensApi.md#login) | **POST** /tokens | 


## `checkToken()`

```php
checkToken()
```



Checks if a Stalactite token is valid or not

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->checkToken();
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->checkToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `login()`

```php
login($login_request): \OpenAPI\Client\Model\LoginResponse
```



Login using the token of one of the supported auth providers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$login_request = new \OpenAPI\Client\Model\LoginRequest(); // \OpenAPI\Client\Model\LoginRequest

try {
    $result = $apiInstance->login($login_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->login: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login_request** | [**\OpenAPI\Client\Model\LoginRequest**](../Model/LoginRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
