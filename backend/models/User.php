<?php

namespace backend\models;

use Yii;
use yii\helpers\FileHelper;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string|null $auth_key
 * @property string $email
 * @property string $firstname
 * @property string $lastname
 * @property string|null $birth_date
 * @property int $position_id
 * @property string $phone
 * @property string $image
 * @property string|null $facebook_link
 * @property string|null $telegram_link
 * @property string $created_date
 * @property string|null $updated_date
 * @property int $creator
 * @property int|null $status
 */
class User extends \yii\db\ActiveRecord
{
    public $file;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'email', 'firstname', 'lastname', 'position_id',  'phone'], 'required'],
            [['birth_date', 'created_date', 'updated_date'], 'safe'],
            [['position_id', 'creator', 'status'], 'integer'],
            [['username', 'password', 'auth_key', 'email', 'firstname', 'image', 'lastname', 'phone', 'facebook_link', 'telegram_link'], 'string', 'max' => 255],
            [['username'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Parol',
            'auth_key' => 'Auth Key',
            'email' => 'Email',
            'firstname' => 'Ism',
            'lastname' => 'Familiya',
            'birth_date' => 'Tug\'ilgan yil',
            'position_id' => 'Lavozim',
            'phone' => 'Telefon',
            'image' => 'Rasm',
            'facebook_link' => 'Facebook',
            'telegram_link' => 'Telegram',
            'created_date' => 'Yaratilgan sana',
            'updated_date' => 'Tahrirlangan sana',
            'creator' => 'Yaratuvchi',
            'status' => 'Status',
        ];
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }

    public function saveAvatarImage()
    {
        if ($this->validate()) {
            $catalog = "uploads/user/{$this->id}/";
//            var_dump($this->id); die;
            FileHelper::createDirectory($catalog);
            $this->file->saveAs($catalog . $this->file->baseName . '.' . $this->file->extension);

            return $this->file->baseName . '.' . $this->file->extension;
        } else {
            return false;
        }
    }

    public function getAvatarImage()
    {
        return "/uploads/user/{$this->id}/$this->image";
    }

    public function deleteOldImage($image)
    {
        $file = "/uploads/user/{$this->id}/$image";
        if (is_file($file)) {
            unlink($file);
        }
    }

    public function generatePassword($password)
    {
        return $this->password = Yii::$app->security->generatePasswordHash($password);
    }
}
