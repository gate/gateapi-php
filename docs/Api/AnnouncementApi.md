# GateApi\AnnouncementApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listAnnouncementArticles**](AnnouncementApi.md#listAnnouncementArticles) | **POST** /ann/list_article | List announcement articles


## listAnnouncementArticles

> \GateApi\Model\AnnouncementArticleListResponse listAnnouncementArticles($announcement_article_list_request)

List announcement articles

Query announcement articles with pagination and filters for title, category, language, time, and other criteria. Send query parameters in the JSON request body. Both page and size are optional and must be strings when provided. No API key is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\AnnouncementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$announcement_article_list_request = new \GateApi\Model\AnnouncementArticleListRequest(); // \GateApi\Model\AnnouncementArticleListRequest | 

try {
    $result = $apiInstance->listAnnouncementArticles($announcement_article_list_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementApi->listAnnouncementArticles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **announcement_article_list_request** | [**\GateApi\Model\AnnouncementArticleListRequest**](../Model/AnnouncementArticleListRequest.md)|  |

### Return type

[**\GateApi\Model\AnnouncementArticleListResponse**](../Model/AnnouncementArticleListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

