# GateApi\WelfareApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserIdentity**](WelfareApi.md#getUserIdentity) | **GET** /rewards/getUserIdentity | Get user identity
[**getBeginnerTaskList**](WelfareApi.md#getBeginnerTaskList) | **GET** /rewards/getBeginnerTaskList | Get beginner task list
[**claimTask**](WelfareApi.md#claimTask) | **POST** /rewards/claimTask | Get the task
[**claimReward**](WelfareApi.md#claimReward) | **POST** /rewards/claimReward | Receive mission rewards


## getUserIdentity

> \GateApi\Model\ApiResponseExSkillGetUserIdentityResp getUserIdentity()

Get user identity

Validate whether the user is eligible for new user rewards. Returns the corresponding error code on validation failure, data is an empty object on success.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WelfareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserIdentity();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling WelfareApi->getUserIdentity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\ApiResponseExSkillGetUserIdentityResp**](../Model/ApiResponseExSkillGetUserIdentityResp.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getBeginnerTaskList

> \GateApi\Model\ApiResponseExSkillGetBeginnerTaskListResp getBeginnerTaskList()

Get beginner task list

Get the current user's onboarding task list. By default, the registration tasks (type=10) and guidance tasks (type=11) that have been assigned to the current user are returned. The registration tasks are ranked first and the guidance tasks are ranked behind. When the user does not have a download task and the system determines that the user has not downloaded the app, a \"Download task to be received\" card will be dynamically added. Among them: - `task_type = 23` for download tasks - `status = 0` for download tasks to be collected Results are cached for 60 seconds. Task lists are limited in number (usually no more than 10) and do not require pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WelfareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBeginnerTaskList();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling WelfareApi->getBeginnerTaskList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\ApiResponseExSkillGetBeginnerTaskListResp**](../Model/ApiResponseExSkillGetBeginnerTaskListResp.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## claimTask

> \GateApi\Model\ApiResponseExSkillClaimTaskResp claimTask($ex_skill_claim_task_req)

Get the task

Receive a single welfare task. The current main scene is for new customer download tasks to be collected, but the interface itself supports new customer registration, guidance, and advanced task types. Processing flow: 1. Read the logged in user 2. Verify user qualifications 3. Risk control verification (event code `task_center`) 4. Verify task configuration and task center tasks 5. Verify whether there is an ongoing task 6. If it is a download task, verify whether the App has been downloaded 7. Write `welfare_user_tasks_xx` 8. Report to task center Risk control transparent transmission fields: - Old fields: `user_id`, `ip`, `const_id`, `is_async`, `action`, `task_id` - New fields: `req_method`, `traceid` - Among them:   - `req_method` from `X-Gate-Request-Source`   - `ip` from `X-Gate-Ip`   - `traceid` from `X-Gate-Trace-Id`   - `const_id` is fixed to an empty string

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WelfareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ex_skill_claim_task_req = new \GateApi\Model\ExSkillClaimTaskReq(); // \GateApi\Model\ExSkillClaimTaskReq | 

try {
    $result = $apiInstance->claimTask($ex_skill_claim_task_req);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling WelfareApi->claimTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ex_skill_claim_task_req** | [**\GateApi\Model\ExSkillClaimTaskReq**](../Model/ExSkillClaimTaskReq.md)|  |

### Return type

[**\GateApi\Model\ApiResponseExSkillClaimTaskResp**](../Model/ApiResponseExSkillClaimTaskResp.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## claimReward

> \GateApi\Model\ApiResponseExSkillClaimRewardResp claimReward($ex_skill_claim_reward_req)

Receive mission rewards

Receive rewards from a single welfare task. Processing flow: 1. Read the logged in user 2. Verify user qualifications 3. Query `welfare_user_tasks_xx` and require the task status to be `StatusDone(2)` 4. Risk control verification (event code `index_page_check`) 5. Query task details and reward information in the task center 6. If the reward is m and n is selected from the prize pool, then `has_m_n_task = true` will be returned and the reward will not be actually issued. 7. Ordinary rewards will enter the original reward collection logic of the Welfare Center Risk control transparent transmission fields: - Old fields: `user_id`, `ip`, `const_id`, `is_async` - New fields: `req_method`, `traceid` - Among them:   - `req_method` from `X-Gate-Request-Source`   - `ip` from `X-Gate-Ip`   - `traceid` from `X-Gate-Trace-Id`   - `const_id` is fixed to an empty string

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WelfareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ex_skill_claim_reward_req = new \GateApi\Model\ExSkillClaimRewardReq(); // \GateApi\Model\ExSkillClaimRewardReq | 

try {
    $result = $apiInstance->claimReward($ex_skill_claim_reward_req);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling WelfareApi->claimReward: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ex_skill_claim_reward_req** | [**\GateApi\Model\ExSkillClaimRewardReq**](../Model/ExSkillClaimRewardReq.md)|  |

### Return type

[**\GateApi\Model\ApiResponseExSkillClaimRewardResp**](../Model/ApiResponseExSkillClaimRewardResp.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

