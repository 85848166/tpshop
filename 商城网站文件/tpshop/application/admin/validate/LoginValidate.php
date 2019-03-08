<?php
/**
 * Created by PhpStorm.
 * User: MACHENIKE
 * Date: 2019/1/9
 * Time: 18:38
 */

namespace app\admin\validate;


use think\captcha\Captcha;
use think\Validate;

class LoginValidate extends Validate
{
    //定义验证规则
    protected $rule=[
        'verify'   => 'checkCode',
        'username' => 'require',
        'password' => 'require'
    ];

    //错误提示信息
    protected $message=[
        "username.require" => "用户名不能为空",
        "password.require" => "密码不能为空",
    ];

    //定义验证码的验证规则
    protected function checkCode($value, $rule, $data = [])
    {
        $captcha=new Captcha();
        return $captcha->check($value) ? true:"验证码错误";
    }
}