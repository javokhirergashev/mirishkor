<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%service}}`.
 */
class m230415_100947_create_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%service}}', [
            'id' => $this->primaryKey(),
            'service_name' => $this->string(255)->notNull(),
            'service_description' => $this->string(255)->notNull(),
            'image' => $this->string(255)->notNull(),
            'service_category' => $this->integer()->notNull(),
            'price' => $this->integer()->notNull(),
            'status' => $this->tinyInteger()->defaultValue(1)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%service}}');
    }
}
