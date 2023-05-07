<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "service_category".
 *
 * @property int $id
 * @property string $category_name
 * @property int $status
 */
class ServiceCategory extends \yii\db\ActiveRecord
{
    public $translate_category_name;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
//            [['category_name'], 'required'],
            [['status'], 'integer'],
            [['category_name'], 'string', 'max' => 255],
            [['translate_category_name'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_name' => 'Kategoriya nomi',
            'status' => 'Status',
        ];
    }
    public function getName($language=null)
    {
        $category_name = json_decode($this->category_name,true);

        if ($language) {
            if (isset($category_name[$language])) {
                return $category_name[$language];
            }else {
                return null;
            }
        }
        if (isset($category_name[Yii::$app->language])) {
            if ($category_name[Yii::$app->language]!='') {
                return $category_name[Yii::$app->language];
            }
            $a = null;
            foreach ($category_name as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }else{
            $a = null;
            var_dump($category_name); die();
            foreach ($category_name as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }
    }
}
