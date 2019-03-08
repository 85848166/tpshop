<?php
/**
 * Created by PhpStorm.
 * User: MACHENIKE
 * Date: 2019/2/18
 * Time: 18:44
 */

namespace app\home\validate;


use think\Validate;

class RegisterValidate extends Validate
{
    protected $rule = [
        "username" => "require|length:3,15",
        "password" => "require|length:6,15"

    ];

    protected $message = [
        "username.require" => "用户名不能为空",
        "username.length" => "用户名的长度必须在3-15个字符之间",
        "password.require" => "密码不能为空",
        "password.length" => "用户密码长度必须在6-15个字符之间"
    ];
}