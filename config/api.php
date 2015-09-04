<?php
/*
#配置
//【请修改】联调时，请把该值设置为true，上线后请设置后false
define('ZHIDAO_OPENAPI_TEST_FLAG', true);
//【请填充】知道为您分配的appkey
define('ZHIDAO_OPENAPI_APPKEY', '1230');
//【请填充】知道为您分配的securitykey
define('ZHIDAO_OPENAPI_SECURITYKEY', '5921B58D288677750470159FA890D748');
//【无须修改】知道的测试和线上域名
define('ZHIDAO_OPENAPI_HOST_TEST', 'http://180.149.133.113:8080');
//【无须修改】知道的线上提交域名
define('ZHIDAO_OPENAPI_HOST', 'http://zhidao.baidu.com');

define('TVAPK_ZHIDAO_API_KEY', 'tvapk');
define('TVAPK_ZHIDAO_API_AUTH_KEY', 'WTF123456!@#$%^');
*/
return [
    'debug' => true,
    'app_key' => '1234',
    'app_security_key' => '5921B58D288677750470159FA890D748',
    'host' => [
        'online' => 'http://zhidao.baidu.com',
        'test' => 'http://180.149.133.113:8080',
    ],
    'key' => 'xzhidao',
    'token' => 'xzhidao',
    'errors' => [
        '0'     => '操作成功',
        '10001' => '系统内部错误',
        '10002' => 'appkey非法',
        '10003' => '参数缺失',
        '10004' => '参数格式非法',
        '10005' => '问题不存在',
        '10006' => '回答不存在',
        '10007' => '用户不存在',
        '10008' => '接口无权限',
        '10009' => '签名错误',
        '10010' => '评价类型非法',
        '20001' => '提问失败',
        '20002' => '回答失败',
        '20003' => '追问失败',
        '20004' => '追答失败',
        '20005' => '评价失败',
        '20006' => '积分操作失败',
        '20007' => '用户财富值不足',
        '20008' => '用户经验值不足',
        '20009' => '修改操作失败',
        '20010' => '删除操作失败',
    ]
];