<?php

return array(
    0 =>
        array(
            'name' => 'appkey',
            'title' => 'App标识',
            'type' => 'string',
            'content' =>
                array(),
            'value' => '',
            'rule' => 'required',
            'msg' => '',
            'tip' => '',
            'ok' => '',
            'extend' => '',
        ),
    1 =>
        array(
            'name' => 'appsecret',
            'title' => 'App密钥',
            'type' => 'string',
            'content' =>
                array(),
            'value' => '',
            'rule' => 'required',
            'msg' => '',
            'tip' => '',
            'ok' => '',
            'extend' => '',
        ),
    2 =>
        array(
            'name' => 'replayTimes',
            'title' => '重播次数',
            'type' => 'string',
            'content' =>
                array(),
            'value' => '3',
            'rule' => 'required',
            'msg' => '',
            'tip' => '',
            'ok' => '',
            'extend' => '',
        ),
    3 =>
        array(
            'name' => 'displayNbr',
            'title' => '显示号码',
            'type' => 'string',
            'content' =>
                array(),
            'value' => '',
            'rule' => 'required',
            'msg' => '',
            'tip' => '+86开头',
            'ok' => '',
            'extend' => '',
        ),
    4 =>
        array(
            'name' => 'ttsTemplateId',
            'title' => '默认语音模板',
            'type' => 'string',
            'content' =>
                array(),
            'value' => '',
            'rule' => 'required',
            'msg' => '',
            'tip' => '',
            'ok' => '',
            'extend' => '',
        ),
    5 =>
        array(
            'name' => 'sendsyscode',
            'title' => '接管系统验证码',
            'type' => 'bool',
            'content' =>
                array(),
            'value' => '0',
            'rule' => 'required',
            'msg' => '',
            'tip' => '启用后系统发送验证码将使用语音验证码，开启前须配置验证码语音模板参数并禁用短信验证码',
            'ok' => '',
            'extend' => '',
        ),
    6 =>
        array(
            'name' => 'template',
            'title' => '验证码语音模板',
            'type' => 'array',
            'content' =>
                array(),
            'value' =>
                array(
                    'register' => '',
                    'resetpwd' => '',
                    'changepwd' => '',
                    'changemobile' => '',
                    'profile' => '',
                    'mobilelogin' => '',
                ),
            'rule' => 'required',
            'msg' => '',
            'tip' => '',
            'ok' => '',
            'extend' => '',
        ),
    7 =>
        array(
            'name' => '__tips__',
            'title' => '温馨提示',
            'type' => 'string',
            'content' =>
                array(),
            'value' => '使用前需要开通中国移动能力开放平台账号,App标识和密钥可以通过<a href="https://cmccopen.cn/aep/appList.html" target="_blank">中国移动能力开放平台后台</a>获取.',
            'rule' => 'required',
            'msg' => '',
            'tip' => '',
            'ok' => '',
            'extend' => '',
        ),
);
