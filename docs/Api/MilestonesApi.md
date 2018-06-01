# Swagger\Client\MilestonesApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMilestones**](MilestonesApi.md#getMilestones) | **GET** /Milestones | Gets a list of Milestones.
[**getMilestonesBySearch**](MilestonesApi.md#getMilestonesBySearch) | **GET** /Milestones/Search | Gets a filtered list of Milestones.


# **getMilestones**
> \Swagger\Client\Model\Milestone[] getMilestones($skip, $top, $count_total)

Gets a list of Milestones.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MilestonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$skip = 56; // int | Optional, number of milestones to skip.
$top = 56; // int | Optional, maximum number of milestones to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getMilestones($skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilestonesApi->getMilestones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| Optional, number of milestones to skip. | [optional]
 **top** | **int**| Optional, maximum number of milestones to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Milestone[]**](../Model/Milestone.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMilestonesBySearch**
> \Swagger\Client\Model\Milestone[] getMilestonesBySearch($updated_after_utc, $skip, $top, $count_total)

Gets a filtered list of Milestones.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MilestonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$updated_after_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional, earliest date when milestone was last updated.
$skip = 56; // int | Optional, number of milestones to skip.
$top = 56; // int | Optional, maximum number of milestones to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getMilestonesBySearch($updated_after_utc, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilestonesApi->getMilestonesBySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updated_after_utc** | **\DateTime**| Optional, earliest date when milestone was last updated. | [optional]
 **skip** | **int**| Optional, number of milestones to skip. | [optional]
 **top** | **int**| Optional, maximum number of milestones to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Milestone[]**](../Model/Milestone.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

