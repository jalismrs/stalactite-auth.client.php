# OpenAPI\Client\ClientAppAuthProvidersApi

All URIs are relative to https://stalactite.jalis.pro/auth.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFirebaseAuthProvider()**](ClientAppAuthProvidersApi.md#createFirebaseAuthProvider) | **POST** /clientApps/{clientAppUid}/authProviders/firebase | 
[**createGoogleAuthProvider()**](ClientAppAuthProvidersApi.md#createGoogleAuthProvider) | **POST** /clientApps/{clientAppUid}/authProviders/google | 
[**getAllClientAppAuthProviders()**](ClientAppAuthProvidersApi.md#getAllClientAppAuthProviders) | **GET** /clientApps/{clientAppUid}/authProviders | 


## `createFirebaseAuthProvider()`

```php
createFirebaseAuthProvider($client_app_uid, $create_firebase_auth_provider_request): \OpenAPI\Client\Model\FirebaseAuthProvider
```



Create a FirebaseAuthProvider for a given ClienApp

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClientAppAuthProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_app_uid = 'client_app_uid_example'; // string | The uid of the clientApp to which to link a new Firebase authProvider
$create_firebase_auth_provider_request = new \OpenAPI\Client\Model\CreateFirebaseAuthProviderRequest(); // \OpenAPI\Client\Model\CreateFirebaseAuthProviderRequest

try {
    $result = $apiInstance->createFirebaseAuthProvider($client_app_uid, $create_firebase_auth_provider_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientAppAuthProvidersApi->createFirebaseAuthProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_app_uid** | **string**| The uid of the clientApp to which to link a new Firebase authProvider |
 **create_firebase_auth_provider_request** | [**\OpenAPI\Client\Model\CreateFirebaseAuthProviderRequest**](../Model/CreateFirebaseAuthProviderRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\FirebaseAuthProvider**](../Model/FirebaseAuthProvider.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGoogleAuthProvider()`

```php
createGoogleAuthProvider($client_app_uid, $create_google_auth_provider_request): \OpenAPI\Client\Model\GoogleAuthProvider
```



Create a GoogleAuthProvider for a given ClienApp

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClientAppAuthProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_app_uid = 'client_app_uid_example'; // string | The uid of the clientApp to which to link a new Google authProvider
$create_google_auth_provider_request = new \OpenAPI\Client\Model\CreateGoogleAuthProviderRequest(); // \OpenAPI\Client\Model\CreateGoogleAuthProviderRequest

try {
    $result = $apiInstance->createGoogleAuthProvider($client_app_uid, $create_google_auth_provider_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientAppAuthProvidersApi->createGoogleAuthProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_app_uid** | **string**| The uid of the clientApp to which to link a new Google authProvider |
 **create_google_auth_provider_request** | [**\OpenAPI\Client\Model\CreateGoogleAuthProviderRequest**](../Model/CreateGoogleAuthProviderRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\GoogleAuthProvider**](../Model/GoogleAuthProvider.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllClientAppAuthProviders()`

```php
getAllClientAppAuthProviders($client_app_uid): \OpenAPI\Client\Model\GetClientAppAuthProvidersResponse
```



Get all authProviders of a clientApp based on its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClientAppAuthProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_app_uid = 'client_app_uid_example'; // string | The uid of the clientApp

try {
    $result = $apiInstance->getAllClientAppAuthProviders($client_app_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientAppAuthProvidersApi->getAllClientAppAuthProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_app_uid** | **string**| The uid of the clientApp |

### Return type

[**\OpenAPI\Client\Model\GetClientAppAuthProvidersResponse**](../Model/GetClientAppAuthProvidersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
