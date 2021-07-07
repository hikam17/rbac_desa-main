<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var app\models\search\PerangkatDesaSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="perangkat-desa-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'nama') ?>

		<?= $form->field($model, 'jabatan') ?>

		<?= $form->field($model, 'tanggal_lahir') ?>

		<?= $form->field($model, 'tanggal_mulai_tugas') ?>

		<?php // echo $form->field($model, 'sk_pengangkatan') ?>

		<?php // echo $form->field($model, 'foto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
