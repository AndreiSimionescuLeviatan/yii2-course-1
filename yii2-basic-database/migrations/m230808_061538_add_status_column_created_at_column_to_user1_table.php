<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%user1}}`.
 */

//php yii migrate/create add_status_column_created_at_column_to_user1_table --fields="status:boolean:defaultValue(1),created_at:integer"

class m230808_061538_add_status_column_created_at_column_to_user1_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user1}}', 'status', $this->boolean()->defaultValue(1));
        $this->addColumn('{{%user1}}', 'created_at', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user1}}', 'status');
        $this->dropColumn('{{%user1}}', 'created_at');
    }
}
