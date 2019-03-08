<?php
/**
 * Created by PhpStorm.
 * User: MACHENIKE
 * Date: 2019/2/15
 * Time: 15:35
 */

namespace app\home\controller;


use think\Controller;
use think\Db;
use think\facade\Config;
use think\facade\Request;
use think\facade\Session;

class Login extends Controller
{
    //用户登录
    public function login()
    {
        //接收用户信息
        if (Request::isPost()){
            $username = Request::param('username');
            $password = Request::param('password');
            //先去数据查找如用户名是否存在
            $userData = Db::name('member')->where('username',$username)->find();
            if ($userData){
                $pas = md5(Config::get("app.secure_salt").$password);
                if ($pas == $userData['password']){
                    //将用户id和用户名称写入session中
                    Session::set('mid',$userData['id']);
                    Session::set('mname',$userData['username']);
                    return json(['code' => 2,'message' => '登陆成功']);
                }else{
                    return json(['code' => 0,'message' => '密码不正确']);
                }
            }else{
                return json(['code' => 0,'message' => '用户不存在']);
            }
         }
        return $this->fetch();
    }

    //判断是否登录
    public function isLogin()
    {
        $mid = Session::get('mid');
        if ($mid){
            return json(['code' => 1]);
        }else{
            return json(['code' => 0]);
        }
    }
    //退出登陆
    public function logOut()
    {
        Session::delete('mid');
        Session::delete('mname');
        if (empty(Session::get('mid')) && empty(Session::get('mname'))){
            return json(['code' => 1,'message' => '退出成功']);
        }else{
            return json(['code' => 0,'message' => '退出失败']);
        }

    }
}