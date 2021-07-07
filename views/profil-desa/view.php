<?php

use dmstr\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var app\models\ProfilDesa $model
*/

$this->title = 'Profil Desa ' . $model->nama_desa;
?>
<div class="giiant-crud profil-desa-view">

    <!-- menu buttons -->
    <p class='pull-left'>
        <?= Html::a('<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit', ['update', 'id' => $model->id],['class' => 'btn btn-info']) ?>
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
            <?php $this->beginBlock('app\models\ProfilDesa'); ?>

            <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
        'nama_desa',
        'alamat:ntext',
        'nomor_telepon',
        [
            'attribute' =>'logo',
            'format' =>'html',
            'value' =>function($model) {
               return Html::img(\Yii::$app->request->BaseUrl.'/uploads/profil_desa/logo/'.$model->logo,['width'=>100]);
             },
         ],
         [
            'attribute' => 'visi_misi',
            'format' => 'raw'
        ],
        [
            'attribute' => 'sejarah',
            'format' => 'raw'
        ],
        [
            'attribute'=> 'instagram',
            'format'=>'html',
            'value'=> function($model){
                if($model->instagram == null){
                    return "Belum Memasukkan link instagram";
                }else{
                    return "<a href=".$model->instagram." target="."_blank>"."Link";
                }
            }
        ],
        [
            'attribute'=> 'facebook',
            'format'=>'html',
            'value'=> function($model){
                if($model->facebook == null){
                    return "Belum Memasukkan link Facebook";
                }else{
                    return "<a href=".$model->facebook." target="."_blank>"."Link";
                }
            }
        ],
        'latitude',
        'longitude',
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
    'label'   => '<b class=""># '.$model->nama_desa.'</b>',
    'content' => $this->blocks['app\models\ProfilDesa'],
    'active'  => true,
], ]
                 ]
    );
    ?>
        </div>
    </div>
</div>
