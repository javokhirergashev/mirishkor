<?php

namespace common\models;

use Yii;
use yii\helpers\Json;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $name
 * @property int $parent_id
 * @property int $order_by
 * @property int $position
 * @property string $link
 * @property int|null $status
 */
class Menu extends \yii\db\ActiveRecord
{
    public $translate_name;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_by', 'link'], 'required'],
            [['parent_id', 'order_by', 'position', 'status'], 'integer'],
            [['link'], 'string', 'max' => 255],
            [['translate_name'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Menyu nomi',
            'translate_name' => 'Menyu nomi',
            'parent_id' => 'Parent ID',
            'order_by' => 'Order By',
            'position' => 'Position',
            'link' => 'Link',
            'status' => 'Status',
        ];
    }

    public function getName($language=null)
    {
        $name = json_decode($this->name,true);

        if ($language) {
            if (isset($name[$language])) {
                return $name[$language];
            }else {
                return null;
            }
        }
        if (isset($name[Yii::$app->language])) {
            if ($name[Yii::$app->language]!='') {
                return $name[Yii::$app->language];
            }
            $a = null;
            foreach ($name as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }else{
            $a = null;
            foreach ($name as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }
    }
}
