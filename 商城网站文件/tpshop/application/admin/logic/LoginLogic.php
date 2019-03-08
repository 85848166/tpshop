<?php
/**
 * Created by PhpStorm.
 * User: MACHENIKE
 * Date: 2019/1/11
 * Time: 17:57
 */

namespace app\admin\logic;


use think\Db;
use think\facade\Config;
use think\facade\Session;

//定义登录的业务逻辑处理类
class LoginLogic
{
    public function login($data){
        //获取用户数据
        $user=Db::name('admin')->where('user_name',$data['username'])->find();
        //首先判断用户名是否存在
        if ($user){
            $salt = Config::get('app.secure_salt');
            if (md5($data['password'].$salt) == $user['password']){
                //登陆标识
                Session::set('user',$user);
                return ['status'=>true, 'msg'=>'登陆成功'];
            }else{
                return ["status" => false, "msg" => "密码不正确"];
            }
        }else{
            return ["status" => false, "msg" => "用户名不存在"];
        }
    }
}