# OpenAPI\Client\AuthProvidersApi

All URIs are relative to https://stalactite.jalis.pro/auth.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAuthProvider()**](AuthProvidersApi.md#deleteAuthProvider) | **DELETE** /authProviders/{uid} | 
[**updateFirebaseAuthProvider()**](AuthProvidersApi.md#updateFirebaseAuthProvider) | **PUT** /authProviders/firebase/{uid} | 
[**updateGoogleAuthProvider()**](AuthProvidersApi.md#updateGoogleAuthProvider) | **PUT** /authProviders/google/{uid} | 


## `deleteAuthProvider()`

```php
deleteAuthProvider($uid)
```



Delete an authProvider given its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uid = 'uid_example'; // string | The uid of the authProvider to delete

try {
    $apiInstance->deleteAuthProvider($uid);
} catch (Exception $e) {
    echo 'Exception when calling AuthProvidersApi->deleteAuthProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The uid of the authProvider to delete |

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

## `updateFirebaseAuthProvider()`

```php
updateFirebaseAuthProvider($uid, $update_firebase_auth_provider_request)
```



Update a Firebase AuthProvider given its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uid = 'uid_example'; // string | The uid of the Firebase authProvider to update
$update_firebase_auth_provider_request = new \OpenAPI\Client\Model\UpdateFirebaseAuthProviderRequest(); // \OpenAPI\Client\Model\UpdateFirebaseAuthProviderRequest

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
 **update_firebase_auth_provider_request** | [**\OpenAPI\Client\Model\UpdateFirebaseAuthProviderRequest**](../Model/UpdateFirebaseAuthProviderRequest.md)|  |

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

## `updateGoogleAuthProvider()`

```php
updateGoogleAuthProvider($uid, $update_google_auth_provider_request)
```



Update a Google AuthProvider given its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uid = 'uid_example'; // string | The uid of the Google authProvider to update
$update_google_auth_provider_request = new \OpenAPI\Client\Model\UpdateGoogleAuthProviderRequest(); // \OpenAPI\Client\Model\UpdateGoogleAuthProviderRequest

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
 **update_google_auth_provider_request** | [**\OpenAPI\Client\Model\UpdateGoogleAuthProviderRequest**](../Model/UpdateGoogleAuthProviderRequest.md)|  |

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
