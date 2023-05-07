<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vacancy".
 *
 * @property int $id
 * @property string $vacancy_name
 * @property string $salary
 * @property string $rate
 * @property string $created_at
 * @property string|null $updated_at
 * @property int $creator
 * @property int $status
 */
class Vacancy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vacancy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vacancy_name', 'salary', 'rate'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['creator', 'status'], 'integer'],
            [['vacancy_name', 'salary', 'rate'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vacancy_name' => 'Vakansiya nomi',
            'salary' => 'Ish haqi',
            'rate' => 'Stavka',
            'created_at' => 'Yaratilgan vaqti',
            'updated_at' => 'Tahrirlangan vaqti',
            'creator' => 'Yaratuvchi',
            'status' => 'Status',
        ];
    }
}
