# Jalismrs\Stalactite\Client\Auth\AuthProvidersApi

All URIs are relative to https://stalactite.jalis.dev/auth.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteFirebaseAuthProvider()**](AuthProvidersApi.md#deleteFirebaseAuthProvider) | **DELETE** /authProviders/firebase/{uid} | 
[**deleteGoogleAuthProvider()**](AuthProvidersApi.md#deleteGoogleAuthProvider) | **DELETE** /authProviders/google/{uid} | 
[**getFirebaseAuthprovider()**](AuthProvidersApi.md#getFirebaseAuthprovider) | **GET** /authProviders/firebase/{uid} | 
[**getGoogleAuthprovider()**](AuthProvidersApi.md#getGoogleAuthprovider) | **GET** /authProviders/google/{uid} | 
[**updateFirebaseAuthProvider()**](AuthProvidersApi.md#updateFirebaseAuthProvider) | **PUT** /authProviders/firebase/{uid} | 
[**updateGoogleAuthProvider()**](AuthProvidersApi.md#updateGoogleAuthProvider) | **PUT** /authProviders/google/{uid} | 


## `deleteFirebaseAuthProvider()`

```php
deleteFirebaseAuthProvider($uid)
```



Delete a Firebase auth provider given its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Auth\Api\AuthProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string | The uid of the Firebase auth provider to delete

try {
    $apiInstance->deleteFirebaseAuthProvider($uid);
} catch (Exception $e) {
    echo 'Exception when calling AuthProvidersApi->deleteFirebaseAuthProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The uid of the Firebase auth provider to delete |

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

## `deleteGoogleAuthProvider()`

```php
deleteGoogleAuthProvider($uid)
```



Delete a Google auth provider given its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Auth\Api\AuthProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string | The uid of the Google auth provider to delete

try {
    $apiInstance->deleteGoogleAuthProvider($uid);
} catch (Exception $e) {
    echo 'Exception when calling AuthProvidersApi->deleteGoogleAuthProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The uid of the Google auth provider to delete |

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


$apiInstance = new Jalismrs\Stalactite\Client\Auth\Api\AuthProvidersApi(
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
    echo 'Exception when calling AuthProvidersApi->getFirebaseAuthprovider: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Jalismrs\Stalactite\Client\Auth\Api\AuthProvidersApi(
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
    echo 'Exception when calling AuthProvidersApi->getGoogleAuthprovider: ', $e->getMessage(), PHP_EOL;
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

## `updateFirebaseAuthProvider()`

```php
updateFirebaseAuthProvider($uid, $update_firebase_auth_provider_request)
```



Update a Firebase AuthProvider given its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Auth\Api\AuthProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string | The uid of the Firebase authProvider to update
$update_firebase_auth_provider_request = new \Jalismrs\Stalactite\Client\Auth\Model\UpdateFirebaseAuthProviderRequest(); // \Jalismrs\Stalactite\Client\Auth\Model\UpdateFirebaseAuthProviderRequest

try {
    $apiInstance->updateFirebaseAuthProvider($uid, $update_firebase_auth_provider_request);
} catch (Exception $e) {
    echo 'Exception when calling AuthProvidersApi->updateFirebaseAuthProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The uid of the Firebase authProvider to update |
 **update_firebase_auth_provider_request** | [**\Jalismrs\Stalactite\Client\Auth\Model\UpdateFirebaseAuthProviderRequest**](../Model/UpdateFirebaseAuthProviderRequest.md)|  |

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

## `updateGoogleAuthProvider()`

```php
updateGoogleAuthProvider($uid, $update_google_auth_provider_request)
```



Update a Google AuthProvider given its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Auth\Api\AuthProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string | The uid of the Google authProvider to update
$update_google_auth_provider_request = new \Jalismrs\Stalactite\Client\Auth\Model\UpdateGoogleAuthProviderRequest(); // \Jalismrs\Stalactite\Client\Auth\Model\UpdateGoogleAuthProviderRequest

try {
    $apiInstance->updateGoogleAuthProvider($uid, $update_google_auth_provider_request);
} catch (Exception $e) {
    echo 'Exception when calling AuthProvidersApi->updateGoogleAuthProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The uid of the Google authProvider to update |
 **update_google_auth_provider_request** | [**\Jalismrs\Stalactite\Client\Auth\Model\UpdateGoogleAuthProviderRequest**](../Model/UpdateGoogleAuthProviderRequest.md)|  |

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
