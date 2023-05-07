<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $body
 * @property string $image
 * @property int $status
 */
class News extends \yii\db\ActiveRecord
{
    public $translate_title;
    public $translate_description;
    public $translate_body;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'required'],
            [['body'], 'string'],
            [['status'], 'integer'],
            [['image'], 'string', 'max' => 255],
            [['translate_title', 'translate_description', 'translate_body'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Sarlavha',
            'translate_title' => 'Sarlavha',
            'description' => 'Izoh',
            'translate_description' => 'Izoh',
            'body' => 'Yangilik matni',
            'translate_body' => 'Yangilik matni',
            'image' => 'Image',
            'status' => 'Status',
        ];
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

    public function getDescription($language=null)
    {
        $description = json_decode($this->description,true);

        if ($language) {
            if (isset($description[$language])) {
                return $description[$language];
            }else {
                return null;
            }
        }
        if (isset($description[Yii::$app->language])) {
            if ($description[Yii::$app->language]!='') {
                return $description[Yii::$app->language];
            }
            $a = null;
            foreach ($description as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }else{
            $a = null;
            foreach ($description as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }
    }

    public function getBody($language=null)
    {
        $body = json_decode($this->body,true);

        if ($language) {
            if (isset($body[$language])) {
                return $body[$language];
            }else {
                return null;
            }
        }
        if (isset($body[Yii::$app->language])) {
            if ($body[Yii::$app->language]!='') {
                return $body[Yii::$app->language];
            }
            $a = null;
            foreach ($body as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }else{
            $a = null;
            foreach ($body as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }
    }
}
