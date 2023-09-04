<?php

namespace app\controllers;

use yii\db\Connection;
use yii\db\Expression;
use yii\web\Controller;

class UserController extends Controller
{
  public function actionIndex()
  {
//      $db = new Connection([
//          'dsn'=>'mysql:host=localhost;dbname=yii2_course',
//          'username'=>'root',
//          'password'=>'',
//          'charset'=>'utf8mb4',
////          'tablePrefix'=>
//      ]);
      $db=\Yii::$app->db;
      $users=$db->createCommand('SELECT * FROM user ')->queryAll();
      echo '<prev>';
      var_dump($users);
      echo '</prev>';

      return "List of users";
  }

  public function actionView($id=2)
  {
      $db=\Yii::$app->db;
      $command=$db->createCommand('SELECT * FROM user WHERE id= :id');
      //bind inlocuieste unde avem id cu valoarea data ca parametru in link
      $user2=$command->bindParam('id',$id)->queryOne();
      echo '<prev>';
      var_dump($user2);
      echo '</prev>';

      $id=3;
      $user3=$command->bindParam('id',$id)->queryOne();
      echo '<prev>';
      var_dump($user3);
      echo '</prev>';
  }

  public function actionCreate()
  {
      //pentru un utilizator
//      $db=\Yii::$app->db;
//      $result = $db->createCommand()->insert('user',[
//          'username'=>'tom',
//          'email'=>'tomsimionescu12@yahoo.com',
//          'status'=>1
//      ])->execute();
//      echo '<prev>';
//      var_dump($result);
//      echo '</prev>';
//      return "User created";

      //pentru mai multi

      $db=\Yii::$app->db;
      $result = $db->createCommand()->batchInsert('user',['username', 'status'],[
          [
              'username'=>'user1',
              'status'=>1
          ],
          [
              'username'=>'user2',
              'status'=>1
          ],
      ])->execute();
      echo '<prev>';
      var_dump($result);
      echo '</prev>';
      return "User created";
  }

  public function actionUpdate()
  {
      //actualizare coloana
//      $db=\Yii::$app->db;
//      $db->createCommand()->update('user',[
//          'email'=>'user1@example.com'
//      ],[
//          'id'=>1
//      ])->execute();
//      return "User updated";

      //actualizare mai multe coloane punand din username in email unde email e null
      $db=\Yii::$app->db;
      $db->createCommand()->update('user',[
          'email'=>new Expression('username')
      ],[
          'email'=>''
      ])->execute();
      return "User updated";

  }

  public function actionDelete($id)
  {
      $db= \Yii::$app->db;
      $db->createCommand()->delete('user','id= :id',[
          "id"=>$id
      ])->execute();
      return "User deleted";
  }

  public function actionUpsert()
  {
      $db=\Yii::$app->db;
      $db->createCommand()->upsert("user",[
            'username'=>'user2',
            'email'=>'user2'
      ],[
          'email'=>'user2'
      ])->execute();
  }


}