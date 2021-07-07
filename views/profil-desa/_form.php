<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var app\models\ProfilDesa $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="box box-info">
    <div class="box-body">
        <?php $form = ActiveForm::begin([
        'id' => 'ProfilDesa',
        'layout' => 'horizontal',
        'enableClientValidation' => true,
        'errorSummaryCssClass' => 'error-summary alert alert-error'
        ]
        );
        ?>
        <?php
    $wizard_config = [
        'id' => 'stepwizard',
        'steps' => [
            1 => [
                'title' => 'Data Pegawai',
                'icon' => 'glyphicon glyphicon-user',
                'content' => $this->render('_form_profil',['model' => $model,'form' => $form]),
            ],
            2 => [
                'title' => 'Pribadi',
                'icon' => '	glyphicon glyphicon-home',
                'content' => $this->render('_form_vimi',['model' => $model,'form' => $form]),
            ],
            3 => [
                'title' => 'Foto',
                'icon' => '	glyphicon glyphicon-picture',
                'content' => $this->render('_form_sosmed',['model' => $model,'form' => $form]),
            ],
        ],
        'complete_content' => $this->render('_action',['model' => $model,'form' => $form]), // Optional final screen
        'start_step' => 1, // Optional, start with a specific step
    ];
    ?>
    <?= \drsdre\wizardwidget\WizardWidget::widget($wizard_config); ?>
			     <hr/>
        <?php echo $form->errorSummary($model); ?>

        <?php ActiveForm::end(); ?>

    </div>
</div>