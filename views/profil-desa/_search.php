<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var app\models\search\ProfilDesaSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="profil-desa-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'nama_desa') ?>

		<?= $form->field($model, 'alamat') ?>

		<?= $form->field($model, 'nomor_telepon') ?>

		<?= $form->field($model, 'logo') ?>

		<?php // echo $form->field($model, 'visi_misi') ?>

		<?php // echo $form->field($model, 'sejarah') ?>

		<?php // echo $form->field($model, 'instagram') ?>

		<?php // echo $form->field($model, 'facebook') ?>

		<?php // echo $form->field($model, 'latitude') ?>

		<?php // echo $form->field($model, 'longitude') ?>

		<?php // echo $form->field($model, 'created_at') ?>

		<?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
