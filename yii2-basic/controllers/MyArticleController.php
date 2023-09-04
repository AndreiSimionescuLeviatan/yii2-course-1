<?php

namespace app\controllers;

use yii\web\Controller;

//my-article/hello
//my-article->
class MyArticleController extends Controller
{
    public function actionHelloWorld($id=14, $message="test2")
    {
        echo "Hello world ".$id.' '.$message;
    }
}