<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property int $id
 * @property string $department_name
 * @property string $created_at
 * @property string $updated_at
 * @property int $creator
 * @property int $status
 */
class Department extends \yii\db\ActiveRecord
{
    public $translate_department_name;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
//            [['department_name'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['creator', 'status'], 'integer'],
            [['department_name', 'phone'], 'string', 'max' => 255],
            [['translate_department_name'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'department_name' => 'Bo\'lim nomi',
            'translate_department_name'=>Yii::t('yii','Title'),
            'created_at' => 'Yaratilgan vaqti',
            'updated_at' => 'Tahrirlangan vaqti',
            'phone' => 'Bo\'lim raqami',
            'creator' => 'Yaratuvchi',
            'status' => 'Status',
        ];
    }
    public function getName($language=null)
    {
        $department_name = json_decode($this->department_name,true);

        if ($language) {
            if (isset($department_name[$language])) {
                return $department_name[$language];
            }else {
                return null;
            }
        }
        if (isset($department_name[Yii::$app->language])) {
            if ($department_name[Yii::$app->language]!='') {
                return $department_name[Yii::$app->language];
            }
            $a = null;
            foreach ($department_name as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }else{
            $a = null;
            foreach ($department_name as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }
    }
}
