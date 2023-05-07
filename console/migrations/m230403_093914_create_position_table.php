<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%position}}`.
 */
class m230403_093914_create_position_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('position', [
            'id' => $this->primaryKey(),
            'position_name' => $this->string(255)->unique()->notNull(),
            'status' => $this->integer()->defaultValue(1) ,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('position');    }
}
