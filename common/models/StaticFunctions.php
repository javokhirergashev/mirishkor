<?php

namespace common\models;

use Yii;
use yii\helpers\FileHelper;

class StaticFunctions
{
    public static function getImage($tableName,$id,$image){
        return Yii::$app->params['backend'] . "/uploads/$tableName/$id/$image";
    }
    public static function saveImage($tableName,$modelId,$image){
        $DIR = "uploads/$tableName/$modelId/";
        FileHelper::createDirectory($DIR);
        $FILENAME = sha1(rand(0,10000).time().rand(0,10000).$image->basename);
        $FILENAME = $FILENAME . '.' .$image->extension;
        $image->saveAs($DIR . $FILENAME);
        return $FILENAME;
    }
    public static function deleteImage($tableName, $model, $oldimage){
        $file = "uploads/$tableName/$model->id/$oldimage";
        if (is_file($file)){
            unlink($file);
        }
    }
    public function getTitle($language=null)
    {
        $title = json_decode($this->title,true);

        if ($language) {
            if (isset($title[$language])) {
                return $title[$language];
            }else {
                return null;
            }
        }
        if (isset($title[Yii::$app->language])) {
            if ($title[Yii::$app->language]!='') {
                return $title[Yii::$app->language];
            }
            $a = null;
            foreach ($title as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }else{
            $a = null;
            foreach ($title as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }
    }
}