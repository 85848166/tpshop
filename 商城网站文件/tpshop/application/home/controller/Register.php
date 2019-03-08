<?php
/**
 * Created by PhpStorm.
 * User: MACHENIKE
 * Date: 2019/2/15
 * Time: 15:35
 */

namespace app\home\controller;


use app\home\validate\RegisterValidate;
use think\Controller;
use think\Db;
use think\facade\Config;
use think\facade\Request;
use think\facade\Session;

class Register extends Controller
{
    //用户注册
    public function register()
    {
        //接受用户注册的信息
        if (Request::isPost()){
            $data = Request::param();
            //数据验证
            $validate = (new RegisterValidate());
            if ($validate->check($data)){
                //构建添加的数据
                $username = $data['username'];
                $password = $data["password"];
                $userData = [
                    'username' => $username,
                    'password' => md5(Config::get('app.secure_salt').$password)
                ];
                //将用户数据写入数据库
                $userId = Db::name('member')->insertGetId($userData);
                if ($userId){
                    //将用户的id 和用户名写入session中
                    Session::set('mid',$userId);
                    Session::set('mname',$username);
                    //注册成功跳转至首页
                    $this->success('注册成功',url("/home/index"));
                }else{
                    $this->error('注册失败');
                }
            }else{
                $this->error($validate->getError());
            }
        }
        //显示用户注册页面
        return $this->fetch();
    }

    //判断用户名是否存在
    public function memberIsHas()
    {
        //获取用户名
        $username = Request::param('username');
        $userData = Db::name('member')->where('username',$username)->find();
        if ($userData){
            return json(['code'=>1]);
        }else{
            return json(['code'=>0]);
        }
    }
}