<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property int $id
 * @property string $service_name
 * @property string $service_description
 * @property string $image
 * @property int $service_category
 * @property int $price
 * @property int $status
 */
class Service extends \yii\db\ActiveRecord
{
    public $translate_service_name;
    public $translate_service_description;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
//            [['price'], 'required'],
            [['service_category', 'price', 'status'], 'integer'],
            [['service_name', 'service_description', 'image'], 'string', 'max' => 255],
            [['translate_service_name', 'translate_service_description'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'service_name' => 'Sarlavha',
            'translate_service_name' => 'Sarlavha tarjima',
            'service_description' => 'Izoh',
            'translate_service_description' => 'Izoh',
            'image' => 'Surat',
            'service_category' => 'Kategoriya',
            'price' => 'Narxi',
            'status' => 'Status',
        ];
    }
    public function getServiceName($language=null)
    {
        $service_name = json_decode($this->service_name,true);

        if ($language) {
            if (isset($service_name[$language])) {
                return $service_name[$language];
            }else {
                return null;
            }
        }
        if (isset($service_name[Yii::$app->language])) {
            if ($service_name[Yii::$app->language]!='') {
                return $service_name[Yii::$app->language];
            }
            $a = null;
            foreach ($service_name as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }else{
            $a = null;
            foreach ($service_name as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }
    }
    public function getServiceDescription($language=null)
    {
        $service_description = json_decode($this->service_description,true);

        if ($language) {
            if (isset($service_description[$language])) {
                return $service_description[$language];
            }else {
                return null;
            }
        }
        if (isset($service_description[Yii::$app->language])) {
            if ($service_description[Yii::$app->language]!='') {
                return $service_description[Yii::$app->language];
            }
            $a = null;
            foreach ($service_description as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }else{
            $a = null;
            foreach ($service_description as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }
    }
}
