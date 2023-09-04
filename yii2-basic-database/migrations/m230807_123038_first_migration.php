<?php

use yii\db\Migration;

/**
 * Class m230807_123038_first_migration
 */
class m230807_123038_first_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}',[
            'id'=>$this->primaryKey(),
            'username'=>$this->string(255),
            'status'=>$this->boolean(),
            'create_at'=>$this->timestamp()
        ]);

        $this->addColumn('user','email',$this->string(512)->notNull());

        $this->createTable('post',[
            'id'=>$this->primaryKey(),
            'title'=>$this->string(),
            'user_id'=>$this->integer()
        ]);

        $this->addForeignKey('FK_post_user',
            'post','user_id','user','id'
        );
//       migrare in terminal
//        php yii migrate/create create_user1_table --fields="username:string(55):notNull:unique,email:string:notNull"

        $this->insert('user',[
            'username'=>'andrei',
            'email'=>'andreisim@example.com',
            'status'=>1,
            'create_at'=>time()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('FK_post_user','post');
        $this->dropTable('post');
        $this->dropTable('user');

        return false;
    }


}
