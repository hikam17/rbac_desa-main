<?php

use dmstr\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var app\models\Demografi $model
*/

$this->title = 'Demografi';
?>
<div class="giiant-crud demografi-view">

    <!-- menu buttons -->
    <p class='pull-left'>
        <?= Html::a('<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit', ['update', 'id' => $model->id],['class' => 'btn btn-info']) ?>
        <?= Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'Tambah Baru', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p class="pull-right">
        <?= Html::a('<span class="glyphicon glyphicon-list"></span> ' . 'Daftar Demografi', ['index'], ['class'=>'btn btn-default']) ?>
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
            <?php $this->beginBlock('app\models\Demografi'); ?>

            <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                     // 'isi_berita:ntext',
        [
            'attribute' => 'isi_demografi',
            'format' => 'raw'
        ],
        [
            'attribute' => 'foto',
            'header'=> 'Download Foto',
            'format' =>'raw',
            'value' => function($model){
                if($model->foto != null){
                    return Html::a("<i class='fa fa-download'></i>".' Download Foto', ["unduh-foto", "id"=>$model->id], [
                        "class"=>"btn btn-primary",
                        "title"=>"Unduh File",
                        "data-confirm" => "Apakah Anda akan mengunduh Foto ini ?",
                    ]);
                }else{
                    return "Belum Upload File";
                }
            }
        ],
        'created_at',
        'updated_at',
            ],
            ]); ?>

            <hr/>

            <?php $this->endBlock(); ?>


            
            <?= Tabs::widget(
                 [
                     'id' => 'relation-tabs',
                     'encodeLabels' => false,
                     'items' => [ [
    'label'   => '<b class=""># '.'</b>',
    'content' => $this->blocks['app\models\Demografi'],
    'active'  => true,
], ]
                 ]
    );
    ?>
        </div>
    </div>
</div>
