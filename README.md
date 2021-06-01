# OpenAPIClient-php

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/jalismrs/stalactite-auth-client.git"
    }
  ],
  "require": {
    "jalismrs/stalactite-auth-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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
$uid = 'uid_example'; // string | The uid of the authProvider to delete

try {
    $apiInstance->deleteAuthProvider($uid);
} catch (Exception $e) {
    echo 'Exception when calling AuthProvidersApi->deleteAuthProvider: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://stalactite.jalis.dev/auth*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthProvidersApi* | [**deleteAuthProvider**](docs/Api/AuthProvidersApi.md#deleteauthprovider) | **DELETE** /authProviders/{uid} | 
*AuthProvidersApi* | [**updateFirebaseAuthProvider**](docs/Api/AuthProvidersApi.md#updatefirebaseauthprovider) | **PUT** /authProviders/firebase/{uid} | 
*AuthProvidersApi* | [**updateGoogleAuthProvider**](docs/Api/AuthProvidersApi.md#updategoogleauthprovider) | **PUT** /authProviders/google/{uid} | 
*ClientAppAuthProvidersApi* | [**createFirebaseAuthProvider**](docs/Api/ClientAppAuthProvidersApi.md#createfirebaseauthprovider) | **POST** /clientApps/{uid}/authProviders/firebase | 
*ClientAppAuthProvidersApi* | [**createGoogleAuthProvider**](docs/Api/ClientAppAuthProvidersApi.md#creategoogleauthprovider) | **POST** /clientApps/{uid}/authProviders/google | 
*ClientAppAuthProvidersApi* | [**getAllClientAppAuthProviders**](docs/Api/ClientAppAuthProvidersApi.md#getallclientappauthproviders) | **GET** /clientApps/{uid}/authProviders | 
*ClientAppsApi* | [**createClientApp**](docs/Api/ClientAppsApi.md#createclientapp) | **POST** /clientApps | 
*ClientAppsApi* | [**deleteClientApp**](docs/Api/ClientAppsApi.md#deleteclientapp) | **DELETE** /clientApps/{uid} | 
*ClientAppsApi* | [**getClientApp**](docs/Api/ClientAppsApi.md#getclientapp) | **GET** /clientApps/{uid} | 
*ClientAppsApi* | [**getClientApps**](docs/Api/ClientAppsApi.md#getclientapps) | **GET** /clientApps | 
*ClientAppsApi* | [**updateClientApp**](docs/Api/ClientAppsApi.md#updateclientapp) | **PUT** /clientApps/{uid} | 
*ServerAppsApi* | [**createServerApp**](docs/Api/ServerAppsApi.md#createserverapp) | **POST** /serverApps | 
*ServerAppsApi* | [**deleteServerApp**](docs/Api/ServerAppsApi.md#deleteserverapp) | **DELETE** /serverApps/{uid} | 
*ServerAppsApi* | [**getServerApp**](docs/Api/ServerAppsApi.md#getserverapp) | **GET** /serverApps/{uid} | 
*ServerAppsApi* | [**getServerApps**](docs/Api/ServerAppsApi.md#getserverapps) | **GET** /serverApps | 
*ServerAppsApi* | [**resetServerAppTokenSignatureKey**](docs/Api/ServerAppsApi.md#resetserverapptokensignaturekey) | **PUT** /serverApps/{uid}/tokenSignatureKey/reset | 
*ServerAppsApi* | [**updateServerApp**](docs/Api/ServerAppsApi.md#updateserverapp) | **PUT** /serverApps/{uid} | 
*TokensApi* | [**checkToken**](docs/Api/TokensApi.md#checktoken) | **HEAD** /tokens | 
*TokensApi* | [**login**](docs/Api/TokensApi.md#login) | **POST** /tokens | 

## Models

- [ApiError](docs/Model/ApiError.md)
- [ClientApp](docs/Model/ClientApp.md)
- [CreateClientAppRequest](docs/Model/CreateClientAppRequest.md)
- [CreateFirebaseAuthProviderRequest](docs/Model/CreateFirebaseAuthProviderRequest.md)
- [CreateGoogleAuthProviderRequest](docs/Model/CreateGoogleAuthProviderRequest.md)
- [CreateServerAppRequest](docs/Model/CreateServerAppRequest.md)
- [FirebaseAuthProvider](docs/Model/FirebaseAuthProvider.md)
- [GetClientAppAuthProvidersResponse](docs/Model/GetClientAppAuthProvidersResponse.md)
- [GetClientAppsResponse](docs/Model/GetClientAppsResponse.md)
- [GetServerAppsResponse](docs/Model/GetServerAppsResponse.md)
- [GoogleAuthProvider](docs/Model/GoogleAuthProvider.md)
- [LoginRequest](docs/Model/LoginRequest.md)
- [LoginResponse](docs/Model/LoginResponse.md)
- [PaginationMetas](docs/Model/PaginationMetas.md)
- [ResetServerAppTokenSignatureKeyRequest](docs/Model/ResetServerAppTokenSignatureKeyRequest.md)
- [ServerApp](docs/Model/ServerApp.md)
- [UpdateClientAppRequest](docs/Model/UpdateClientAppRequest.md)
- [UpdateFirebaseAuthProviderRequest](docs/Model/UpdateFirebaseAuthProviderRequest.md)
- [UpdateGoogleAuthProviderRequest](docs/Model/UpdateGoogleAuthProviderRequest.md)
- [UpdateServerAppRequest](docs/Model/UpdateServerAppRequest.md)

## Authorization

### StalactiteToken

- **Type**: API key
- **API key parameter name**: X-API-TOKEN
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0-dev.7bc179606b04befbf7d639fecf8ae1e37b2dd2a1`
    - Package version: `1.0.0-dev`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
