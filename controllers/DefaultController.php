<?php

namespace deluxcms\media\controllers;

use deluxcms\media\models\Media;
use Yii;
use backend\controllers\BaseController;

class DefaultController extends BaseController
{
    public $enableActions = ['index'];

    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionTest()
    {
        $model = new Media();
        return $this->render('test', [
            'model' => $model
        ]);
    }
}