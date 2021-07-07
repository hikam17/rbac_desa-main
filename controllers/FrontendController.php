<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\HttpException;
use yii\helpers\Url;
use yii\filters\AccessControl;
use dmstr\bootstrap\Tabs;
use app\models\Action;
use yii\helpers\ArrayHelper;
/**
* This is the class for controller "BeritaController".
*/
class FrontendController extends Controller
{
    public function actionIndex()
    {

        $this->layout=false;
    return $this->render('index');
    }
}
