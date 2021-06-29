# Jalismrs\Stalactite\Client\Auth\ClientAppAuthProvidersApi

All URIs are relative to https://stalactite.jalis.dev/auth.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFirebaseAuthProvider()**](ClientAppAuthProvidersApi.md#createFirebaseAuthProvider) | **POST** /clientApps/{uid}/authProviders/firebase | 
[**createGoogleAuthProvider()**](ClientAppAuthProvidersApi.md#createGoogleAuthProvider) | **POST** /clientApps/{uid}/authProviders/google | 
[**getAllClientAppAuthProviders()**](ClientAppAuthProvidersApi.md#getAllClientAppAuthProviders) | **GET** /clientApps/{uid}/authProviders | 


## `createFirebaseAuthProvider()`

```php
createFirebaseAuthProvider($uid, $create_firebase_auth_provider_request): \Jalismrs\Stalactite\Client\Auth\Model\FirebaseAuthProvider
```



Create a FirebaseAuthProvider for a given ClienApp

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Auth\Api\ClientAppAuthProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string | The uid of the clientApp to which to link a new Firebase authProvider
$create_firebase_auth_provider_request = new \Jalismrs\Stalactite\Client\Auth\Model\CreateFirebaseAuthProviderRequest(); // \Jalismrs\Stalactite\Client\Auth\Model\CreateFirebaseAuthProviderRequest

try {
    $result = $apiInstance->createFirebaseAuthProvider($uid, $create_firebase_auth_provider_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientAppAuthProvidersApi->createFirebaseAuthProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The uid of the clientApp to which to link a new Firebase authProvider |
 **create_firebase_auth_provider_request** | [**\Jalismrs\Stalactite\Client\Auth\Model\CreateFirebaseAuthProviderRequest**](../Model/CreateFirebaseAuthProviderRequest.md)|  |

### Return type

[**\Jalismrs\Stalactite\Client\Auth\Model\FirebaseAuthProvider**](../Model/FirebaseAuthProvider.md)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGoogleAuthProvider()`

```php
createGoogleAuthProvider($uid, $create_google_auth_provider_request): \Jalismrs\Stalactite\Client\Auth\Model\GoogleAuthProvider
```



Create a GoogleAuthProvider for a given ClienApp

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Auth\Api\ClientAppAuthProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string | The uid of the clientApp to which to link a new Google authProvider
$create_google_auth_provider_request = new \Jalismrs\Stalactite\Client\Auth\Model\CreateGoogleAuthProviderRequest(); // \Jalismrs\Stalactite\Client\Auth\Model\CreateGoogleAuthProviderRequest

try {
    $result = $apiInstance->createGoogleAuthProvider($uid, $create_google_auth_provider_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientAppAuthProvidersApi->createGoogleAuthProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The uid of the clientApp to which to link a new Google authProvider |
 **create_google_auth_provider_request** | [**\Jalismrs\Stalactite\Client\Auth\Model\CreateGoogleAuthProviderRequest**](../Model/CreateGoogleAuthProviderRequest.md)|  |

### Return type

[**\Jalismrs\Stalactite\Client\Auth\Model\GoogleAuthProvider**](../Model/GoogleAuthProvider.md)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllClientAppAuthProviders()`

```php
getAllClientAppAuthProviders($uid): \Jalismrs\Stalactite\Client\Auth\Model\GetClientAppAuthProvidersResponse
```



Get all authProviders of a clientApp based on its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Auth\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Auth\Api\ClientAppAuthProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string | The uid of the clientApp

try {
    $result = $apiInstance->getAllClientAppAuthProviders($uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientAppAuthProvidersApi->getAllClientAppAuthProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The uid of the clientApp |

### Return type

[**\Jalismrs\Stalactite\Client\Auth\Model\GetClientAppAuthProvidersResponse**](../Model/GetClientAppAuthProvidersResponse.md)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
