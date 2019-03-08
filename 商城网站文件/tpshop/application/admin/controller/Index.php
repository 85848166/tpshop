<?php
/**
 * Created by PhpStorm.
 * User: MACHENIKE
 * Date: 2019/1/9
 * Time: 17:02
 */

namespace app\admin\controller;


use think\Controller;
use think\facade\Session;

class Index extends Controller
{
    public function index(){
        $user=Session::get('user');
        $this->assign('username',$user['user_name']);
        return $this->fetch();
    }
}