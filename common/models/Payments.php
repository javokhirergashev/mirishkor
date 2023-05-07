<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "payments".
 *
 * @property int $id
 * @property int $service_id
 * @property string $payment_date
 * @property int $sum_pay
 * @property int $status
 */
class Payments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['service_id', 'payment_date', 'sum_pay', 'status'], 'required'],
            [['service_id', 'sum_pay', 'status'], 'integer'],
            [['payment_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'service_id' => 'Service ID',
            'payment_date' => 'Payment Date',
            'sum_pay' => 'Sum Pay',
            'status' => 'Status',
        ];
    }
}
