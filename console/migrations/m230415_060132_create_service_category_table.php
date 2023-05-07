<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%service_category}}`.
 */
class m230415_060132_create_service_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%service_category}}', [
            'id' => $this->primaryKey(),
            'category_name' => $this->string(255)->notNull(),
            'status' => $this->tinyInteger()->defaultValue(1)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%service_category}}');
    }
}
