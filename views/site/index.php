<?php

/* @var $this yii\web\View */
use app\models\BidangUsaha;
use app\models\PencatatanUsaha;
use app\models\KebutuhanBbm;
use app\models\RekomendasiBbm;
use yii\bootstrap\Html;
use yii\grid\GridView;
use Yii\web\UrlManager;
$this->title = 'Dashboard';

//$tableData = array_diff($tableData,$stk);
?>

<div class="site-index">

    <div class="row">    
    <div class="jumbotron">
        <h1>Selamat Datang</h1>

        <p class="lead"><?= \Yii::$app->user->identity->name; ?></p>
    </div>
</div>
