<?php

namespace app\controllers;

use app\models\Customer;
use Cassandra\Custom;
use yii\web\Controller;

class CustomerController extends Controller
{
    public function actionIndex()
    {
        $customers=Customer::find()->all();
        echo '<prev>';
        var_dump($customers);
        echo '<prev>';
    }

    public function actionView($id)
    {
//        $customer=Customer::find()->where('id:id',['id'=>$id])->one();
        $customer=Customer::findOne($id);
        echo '<prev>';
        var_dump($customer);
        echo '</prev>';
    }

    public function actionSave()
    {
        $customer=new Customer();
        $customer->username='andrei12';
        $customer->email='andrei12@gmail.com';
        $customer->status='1';
        if($customer->save()){
            echo '<prev>';
            var_dump('Customer save');
            echo '</prev>';
        }
        else
        {
            echo '<prev>';
            var_dump('Fail');
            echo '</prev>';
        }
    }

    public function actionUpdate($id)
    {
        $customer=Customer::findOne($id);
        $customer->email='andrei2000@gmail.com';

        if($customer->save()){
            echo '<prev>';
            var_dump('Customer update');
            echo '</prev>';
        }
        else
        {
            echo '<prev>';
            var_dump('Fail');
            echo '</prev>';
        }
    }

    public function actionDelete($id)
    {
        $customer=Customer::findOne($id);
        $customer->delete();

        if($customer->delete()){
            echo '<prev>';
            var_dump('Customer delete');
            echo '</prev>';
        }
        else
        {
            echo '<prev>';
            var_dump('Fail' . $customer->errors);
            echo '</prev>';
        }
    }
}