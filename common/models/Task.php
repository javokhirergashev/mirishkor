<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property int $id
 * @property int $user_id
 * @property int $department_id
 * @property string $task_name
 * @property string $created_at
 * @property string|null $updated_at
 * @property string $begin_date
 * @property string $end_date
 * @property int|null $status
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'department_id', 'task_name', 'created_at', 'begin_date', 'end_date'], 'required'],
            [['user_id', 'department_id', 'status'], 'integer'],
            [['task_name'], 'string'],
            [['created_at', 'updated_at', 'begin_date', 'end_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'department_id' => 'Department ID',
            'task_name' => 'Task Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'begin_date' => 'Begin Date',
            'end_date' => 'End Date',
            'status' => 'Status',
        ];
    }
}
