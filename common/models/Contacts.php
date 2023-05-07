<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $addres
 * @property string|null $email
 * @property string|null $first_phone
 * @property string|null $second_phone
 * @property string|null $third_phone
 * @property string|null $telegram_link
 * @property string|null $instagram_link
 * @property string|null $facebook_link
 * @property string|null $twitter_link
 * @property string|null $postal_code
 */
class Contacts extends \yii\db\ActiveRecord
{
    public $translate_addres;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
//            [['addres'], 'required'],
            [['addres'], 'string'],
            [['email', 'first_phone', 'second_phone', 'third_phone', 'telegram_link', 'instagram_link', 'facebook_link', 'twitter_link', 'postal_code'], 'string', 'max' => 255],
            [['translate_addres'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'addres' => 'Manzil',
            'translate_addres' => 'Manzil',
            'email' => 'Email',
            'first_phone' => '1-telefon',
            'second_phone' => '2-telefon',
            'third_phone' => '3-telefon',
            'telegram_link' => 'Telegram',
            'instagram_link' => 'Instagram',
            'facebook_link' => 'Facebook',
            'twitter_link' => 'Twitter',
            'postal_code' => 'Pochta indeksi',
        ];
    }
    public function getAddress($language = null)
    {
        $address = json_decode($this->addres, true);
        if ($language) {
            return $address[$language] ?? null;
        }

        if (isset($address[Yii::$app->language])) {
            if ($address[Yii::$app->language] != '') {
                return $address[Yii::$app->language];
            }
            $a = null;
            foreach ($address as $value) {
                if ($value != '') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        } else {
            $a = null;
            $address = json_decode($address, true);
            foreach ($address as $value) {
                if ($value != '') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }
    }
}
