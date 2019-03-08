<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function getCategory()
{
    //获取分类数据
    $category = Db::name('category')->select();
    $list=[];
    foreach ($category as $cate_1){
        if ($cate_1['pid'] == 0){
            //循环所有分类找出他的子类
            foreach ($category as $cate_2){
                if ($cate_2['pid'] == $cate_1['id']){
                    //循环出所有分类子类
                    foreach ($category as $cate_3){
                        if ($cate_3['pid'] == $cate_2['id']){
                            $cate_2['child'][] = $cate_3;
                        }
                    }
                    $cate_1['child'][] = $cate_2;
                }
            }
            $list[] = $cate_1;
        }
    }
    return $list;
}

//获取导航的数据
function getNavigation()
{
    $navigation = Db::name('navigation')->select();
    return $navigation;
}