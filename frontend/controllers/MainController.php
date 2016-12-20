<?php

namespace frontend\controllers;
use yii\web\Controller;

class MainController extends Controller
{
    public function actionIndex()
    {
        $hello = 'Hello world';
        return $this->render('index',
            [
                'hello' => $hello
            ]);
    }
}