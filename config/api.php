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


];