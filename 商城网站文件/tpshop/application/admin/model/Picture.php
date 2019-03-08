<?php
/**
 * Created by PhpStorm.
 * User: MACHENIKE
 * Date: 2019/1/20
 * Time: 22:53
 */

namespace app\admin\model;


use think\Model;

class Picture extends Model
{
    public function pictureUpload($file)
    {
        //获取原文件名
        $origin_file_name = $file->getInfo('name');
        // 移动到框架应用根目录/uploads/ 目录下
        $info = $file->validate(['size'=>3145728,'ext'=>'jpg,png,gif'])->move( './uploads');
        if ($info){
            /**
             * 上传成功获取文件信息
             */
            //获取文件名称
            $filename = $info->getFilename();
            //获取文件保存路径
            $saveName = $info->getSaveName();
            //转换路径
            $saveName = str_replace('\\','/',$saveName);
            $picture = self::create([
                'pic_name'    => $filename,//文件名称
                'pic_address' => $saveName,//文件路径
                'upload_time' => time(),   //文件上传时间
            ]);
            //获取图片id
            $pic_id = $picture->id;
            //返回数据
            return [
                'file_id'          => $pic_id,
                'file_name'        => 'uploads/'.$saveName,
                'origin_file_name' => $origin_file_name,
                'state'            => 1,
            ];
        }else {
            //上传失败
            return ["state" => 0, "msg" => $file->getError()];
        }
    }
}