<?php

namespace app\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class BgWidget extends Widget
{
    public $bgColor='white';

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        ob_start();
    }

    public function run()
    {
        parent::run(); // TODO: Change the autogenerated stub
        $output=ob_get_clean();
//        return Html::tag('div',$output,[
//            'style'=>'background-color:' .$this->bgColor,
//        ]);

        //pot crea un view si sa il apelez aici in widgets
        return $this->render('test',[
            'message'=>'Hello from widget view file'
        ]);
    }
}