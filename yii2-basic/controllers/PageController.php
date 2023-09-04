<?php

namespace app\controllers;

use yii\web\Controller;

class PageController extends Controller
{
    public function actionAboutPagina($id)
    {
        //imi trimite niste parametrii si ii pot apela oriunde vreau eu, in orice pagina
        $this->view->params['sharedVariable']='I am shared';
        $this->view->params['sharedVariables']='I am shared 2';
        //randez pagina about-pagina si trimit niste parametrii care vor fi printati in about-pagina
        return $this->render('about-pagina',[
            'a'=>$id,
            'b'=>2
        ]);
    }
}