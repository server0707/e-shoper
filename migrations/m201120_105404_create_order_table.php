<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order}}`.
 */
class m201120_105404_create_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
            'qty' => $this->integer(),
            'sum' => $this->float(),
            'status' => "enum('0','1') DEFAULT '0'",
            'name' => $this->string(255),
            'email' => $this->string(255),
            'phone' => $this->string(255),
            'address' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order}}');
    }
}
