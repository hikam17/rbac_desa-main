<?php

use dmstr\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var app\models\PerangkatDesa $model
*/

$this->title = 'Perangkat Desa ' . $model->nama;
?>
<div class="giiant-crud perangkat-desa-view">

    <!-- menu buttons -->
    <p class='pull-left'>
        <?= Html::a('<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit', ['update', 'id' => $model->id],['class' => 'btn btn-info']) ?>
        <?= Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'Tambah Baru', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p class="pull-right">
        <?= Html::a('<span class="glyphicon glyphicon-list"></span> ' . 'Daftar Perangkat Desa', ['index'], ['class'=>'btn btn-default']) ?>
    </p>

    <div class="clearfix"></div>

    <!-- flash message -->
    <?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
        <span class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <?= \Yii::$app->session->getFlash('deleteError') ?>
        </span>
    <?php endif; ?>

    <div class="box box-info">
        <div class="box-body">
            <?php $this->beginBlock('app\models\PerangkatDesa'); ?>

            <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
        'nama',
        'alamat:ntext',
// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::attributeFormat
[
    'format' => 'html',
    'attribute' => 'jabatan',
    'value' => function($model){
        return $model->jabatans->nama_jabatan;
    }
],
[
    'class' => yii\grid\DataColumn::className(),
    'attribute'=>'tanggal_lahir',
    'format' => 'raw',
    'value'=>function($model){
        return \app\components\Tanggal::toReadableDate($model->tanggal_lahir);
    }
],
[
    'class' => yii\grid\DataColumn::className(),
    'attribute'=>'tanggal_mulai_tugas',
    'format' => 'raw',
    'value'=>function($model){
        return \app\components\Tanggal::toReadableDate($model->tanggal_mulai_tugas);
    }
],
        'sk_pengangkatan',
        [
            'attribute' =>'foto',
            'format' =>'html',
            'value' =>function($model) {
               return Html::img(\Yii::$app->request->BaseUrl.'/uploads/perangkat_desa/foto/'.$model->foto,['width'=>100]);
             },
         ],
            ],
            ]); ?>

            <hr/>

            <?= Html::a('<span class="glyphicon glyphicon-trash"></span> ' . 'Delete', ['delete', 'id' => $model->id],
            [
            'class' => 'btn btn-danger',
            'data-confirm' => '' . 'Are you sure to delete this item?' . '',
            'data-method' => 'post',
            ]); ?>
            <?php $this->endBlock(); ?>


            
            <?= Tabs::widget(
                 [
                     'id' => 'relation-tabs',
                     'encodeLabels' => false,
                     'items' => [ [
    'label'   => '<b class=""># '.$model->nama.'</b>',
    'content' => $this->blocks['app\models\PerangkatDesa'],
    'active'  => true,
], ]
                 ]
    );
    ?>
        </div>
    </div>
</div>
