<?php

namespace app\controllers\MyAdmin;

use yii\web\Controller;

//my-article/hello
//my-article->
class MyArticleController extends Controller
{
    public function actionHelloWorld()
    {
        echo "Hello world from admin";
    }
}