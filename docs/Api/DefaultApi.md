# Jalismrs\Stalactite\Client\Auth\DefaultApi

All URIs are relative to https://stalactite.jalis.pro/auth.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFirebaseAuthprovider()**](DefaultApi.md#getFirebaseAuthprovider) | **GET** /authProviders/firebase/{uid} | 
[**getGoogleAuthprovider()**](DefaultApi.md#getGoogleAuthprovider) | **GET** /authProviders/google/{uid} | 


## `getFirebaseAuthprovider()`

```php
getFirebaseAuthprovider($uid): \Jalismrs\Stalactite\Client\Auth\Model\FirebaseAuthProvider
```



Get a FirebaseAuthProvider by its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Auth\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string | The uid of the FirebaseAuthProvider to get

try {
    $result = $apiInstance->getFirebaseAuthprovider($uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getFirebaseAuthprovider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The uid of the FirebaseAuthProvider to get |

### Return type

[**\Jalismrs\Stalactite\Client\Auth\Model\FirebaseAuthProvider**](../Model/FirebaseAuthProvider.md)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGoogleAuthprovider()`

```php
getGoogleAuthprovider($uid): \Jalismrs\Stalactite\Client\Auth\Model\GoogleAuthProvider
```



Get a GoogleAuthProvider by its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Auth\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string | The uid of the GoogleAuthProvider to get

try {
    $result = $apiInstance->getGoogleAuthprovider($uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getGoogleAuthprovider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The uid of the GoogleAuthProvider to get |

### Return type

[**\Jalismrs\Stalactite\Client\Auth\Model\GoogleAuthProvider**](../Model/GoogleAuthProvider.md)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
