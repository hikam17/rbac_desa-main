<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/**
* @var yii\web\View $this
* @var yii\data\ActiveDataProvider $dataProvider
* @var app\models\search\SliderGambarSearch $searchModel
*/

$this->title = 'Slider Gambar';
$this->params['breadcrumbs'][] = $this->title;
?>

<p>
    <?= Html::a('<i class="fa fa-plus"></i> Tambah Baru', ['create'], ['class' => 'btn btn-success']) ?>
</p>


    <?php \yii\widgets\Pjax::begin(['id'=>'pjax-main', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-main ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>

    <div class="box box-info">
        <div class="box-body">
            <div class="table-responsive">
                <?= GridView::widget([
                'layout' => '{summary}{pager}{items}{pager}',
                'dataProvider' => $dataProvider,
                'pager'        => [
                'class'          => yii\widgets\LinkPager::className(),
                'firstPageLabel' => 'First',
                'lastPageLabel'  => 'Last'                ],
                'filterModel' => $searchModel,
                'tableOptions' => ['class' => 'table table-striped table-bordered table-hover'],
                'headerRowOptions' => ['class'=>'x'],
                'columns' => [

                \app\components\ActionButton::getButtonsAktif(),
                'judul',
                [
                    'attribute' =>'gambar',
                    'format' =>'html',
                    'value' =>function($model) {
                       return Html::img(\Yii::$app->request->BaseUrl.'/uploads/slider-gambar/'.$model->gambar,['width'=>100]);
                     },
                 ],
                [
                    'attribute' => 'deleted_status',
                    'format' => 'raw',
                    'value' => function($model) {
                        if ($model->deleted_status == 0) {
                            return '<span class="label label-success">Publish</span>';
                        }else {
                            return '<span class="label label-danger">Non Publish</span>';
                        }
                    }
                ],
                ],
                ]); ?>
            </div>
        </div>
    </div>

    <?php \yii\widgets\Pjax::end() ?>

