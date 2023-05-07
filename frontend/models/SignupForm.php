<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use backend\models\User;
use yii\web\UploadedFile;

/**
 * Signup form
 */
class SignupForm extends User
{
    public $username;
    public $email;
    public $password;
    public $firstname;
    public $lastname;
    public $phone;
    public $birth_date;


    /**
     * {@inheritdoc}
     */


    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        $model = new User();

        $model->creator = Yii::$app->user->getId();
        $model->created_date = date("Y-m-d H:i:s");
        $model->position_id == 0;
        if ($this->request->isPost) {
            if (!empty(!$model->status)){
                $model->status = 1;
            }else{
                $model->status = 0;
            }

            if ($model->load($this->request->post())) {
                if ($model->validate()) {
                    "<pre>";
                    print_r($model); die();
                    $model->generatePassword($model->password);
                    $model->save();
                    return $this->redirect(['index']);
                }else{
                    print_r($model->errors);die;
                }
            }
        } else {
            $model->loadDefaultValues();
        }

    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
