<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%task}}`.
 */
class m230411_084207_create_task_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('task', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'department_id' => $this->integer()->notNull(),
            'task_name' => $this->text()->notNull(),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime(),
            'begin_date' => $this->dateTime()->notNull(),
            'end_date' => $this->dateTime()->notNull(),
            'status' => $this->tinyInteger()->defaultValue(2)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%task}}');
    }
}
