<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
       echo phpinfo();
    }


    public function hello($name = 'ThinkPHP5')
    {
        return '';
    }
}

