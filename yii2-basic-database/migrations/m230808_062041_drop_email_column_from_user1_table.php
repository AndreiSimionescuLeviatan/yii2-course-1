<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%user1}}`.
 */

//php yii migrate/create drop_email_column_from_user1_table --fields="email:string(255)"

class m230808_062041_drop_email_column_from_user1_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%user1}}', 'email');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('{{%user1}}', 'email', $this->string(255));
    }
}
