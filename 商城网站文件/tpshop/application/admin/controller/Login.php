<?php
/**
 * Created by PhpStorm.
 * User: MACHENIKE
 * Date: 2019/1/9
 * Time: 17:02
 */

namespace app\admin\controller;


use app\admin\logic\LoginLogic;
use app\admin\validate\LoginValidate;
use think\captcha\Captcha;
use think\Controller;
use think\facade\Request;
use think\facade\Session;


class Login extends Controller
{
    public $logic;
    public function initialize()
    {
        $this->logic=new LoginLogic();
    }

    public function login()
    {
        if (Request::isAjax()){
            $data=Request::param();
            $validate=(new LoginValidate());
            if ($validate->check($data)){
                return $this->logic->login($data);
            }else{
              return ['status'=>false,'msg'=> $validate->getError()];
            };
        };
        return $this->fetch();
    }

    //退出登陆
    public function logOut(){
        //如跟退出成功，就删除session登陆标识
        Session::delete('user');
        if (empty(Session::get('user'))){
            return $this->redirect(url('/admin/login'));
        }else{
            return $this->error('退出失败',url('/home/admin'));
        }
    }

    //实现验证码
    public function verify()
    {
        ob_clean();
        //验证码的配置选项
        $config =    [
            // 验证码字体大小
            'fontSize'    =>    16,
            // 验证码位数
            'length'      =>    4,
            // 关闭验证码杂点
            'useNoise'    =>    true,
        ];
        $captcha = new Captcha($config);
        return $captcha->entry();
    }
}