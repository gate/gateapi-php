# GateApi\WelfareApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserIdentity**](WelfareApi.md#getUserIdentity) | **GET** /rewards/getUserIdentity | Get user identity
[**getBeginnerTaskList**](WelfareApi.md#getBeginnerTaskList) | **GET** /rewards/getBeginnerTaskList | Get beginner task list
[**claimTask**](WelfareApi.md#claimTask) | **POST** /rewards/claimTask | 领取任务
[**claimReward**](WelfareApi.md#claimReward) | **POST** /rewards/claimReward | 领取任务奖励


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

获取当前用户的新客入门任务列表。  默认返回已经归属到当前用户的注册任务（type=10）和引导任务（type=11），注册任务排在前面，引导任务排在后面。 当用户尚未拥有下载任务、且系统判断用户未下载过 App 时，会动态补充一条“待领取下载任务”卡片。  其中： - 下载任务的 `task_type = 23` - 待领取下载任务的 `status = 0`  结果缓存 60 秒。任务列表数量有限（通常不超过 10 条），无需分页。

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

领取任务

领取单个福利任务。  当前主场景为新客下载任务领取，但接口本身支持新客注册、引导、进阶任务类型。  处理流程： 1. 读取登录用户 2. 做用户资格校验 3. 风控校验（事件码 `task_center`） 4. 校验任务配置与任务中心任务 5. 校验是否已存在进行中任务 6. 若为下载任务，校验是否已下载 App 7. 写入 `welfare_user_tasks_xx` 8. 上报任务中心  风控透传字段： - 老字段：`user_id`、`ip`、`const_id`、`is_async`、`action`、`task_id` - 新增字段：`req_method`、`traceid` - 其中：   - `req_method` 来自 `X-Gate-Request-Source`   - `ip` 来自 `X-Gate-Ip`   - `traceid` 来自 `X-Gate-Trace-Id`   - `const_id` 固定为空字符串

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

领取任务奖励

领取单个福利任务奖励。  处理流程： 1. 读取登录用户 2. 做用户资格校验 3. 查询 `welfare_user_tasks_xx`，要求任务状态为 `StatusDone(2)` 4. 风控校验（事件码 `index_page_check`） 5. 查询任务中心任务详情与奖励信息 6. 若奖励为 m 选 n 奖池，则返回 `has_m_n_task = true`，不实际发奖 7. 普通奖励则进入福利中心原领奖逻辑  风控透传字段： - 老字段：`user_id`、`ip`、`const_id`、`is_async` - 新增字段：`req_method`、`traceid` - 其中：   - `req_method` 来自 `X-Gate-Request-Source`   - `ip` 来自 `X-Gate-Ip`   - `traceid` 来自 `X-Gate-Trace-Id`   - `const_id` 固定为空字符串

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

