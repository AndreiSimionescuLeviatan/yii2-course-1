<?php

use yii\db\Migration;

/**
 * Class m230808_062356_create_post1_tabl
 */

//php yii migrate/create create_post1_tabl --fields="title:string,body:text,created_by:integer:notNull:foreignKey(user1)"

class m230808_062356_create_post1_tabl extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230808_062356_create_post1_tabl cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230808_062356_create_post1_tabl cannot be reverted.\n";

        return false;
    }
    */
}
