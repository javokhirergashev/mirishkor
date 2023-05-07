<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255)->unique()->notNull(),
            'password' => $this->string(255)->notNull(),
            'auth_key' => $this->string(255)->null(),
            'email' => $this->string(255)->unique()->NotNull(),
            'firstname' => $this->string(255)->notNull(),
            'lastname' => $this->string(255)->notNull(),
            'birth_date' => $this->date(),
            'position_id' => $this->integer()->notNull(),
            'phone' => $this->string(255)->notNull(),
            'image' => $this->string(255)->notNull(),
            'facebook_link' => $this->string(255),
            'telegram_link' => $this->string(255),
            'created_date' => $this->dateTime()->notNull(),
            'updated_date' => $this->dateTime(),
            'creator' => $this->integer()->notNull(),
            'status' => $this->tinyInteger()->defaultValue(1)

        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
