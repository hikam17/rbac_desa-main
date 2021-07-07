<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\models\LoginForm */

$this->title = 'Register';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-user form-control-feedback'></span>"
];


$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions3 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];

$fieldOptions4 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-phone form-control-feedback'></span>"
];

$fieldOptions5 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-home form-control-feedback'></span>"
];
?>

    <div class="login-box">
        <div class="login-logo">
            <?= Html::img(["uploads/logo_batu.png"],["width" => "200px"]) ?>
        </div>
        <div class="login-box-body">
            <h3><?= Html::a("Login", ["site/login"]) ?> | Daftar</h3>
            <?php $form = ActiveForm::begin(['id' => 'register-form', 'enableClientValidation' => false]); ?>
            <?= $form
                ->field($model, 'name', $fieldOptions1)
                ->label(false)
                ->textInput(['placeholder' => $model->getAttributeLabel('name')]) ?>
                <?= $form
                ->field($model, 'email', $fieldOptions2)
                ->label(false)
                ->textInput(['placeholder' => $model->getAttributeLabel('email'),'type' => 'email']) ?>
            <?= $form
                ->field($model, 'nik', $fieldOptions1)
                ->label(false)
                ->textInput(['placeholder' => $model->getAttributeLabel('nik'),'type' => 'number']) ?>
            <?= $form
                ->field($model, 'no_hp', $fieldOptions4)
                ->label(false)
                ->textInput(['placeholder' => $model->getAttributeLabel('no_hp'),'type' => 'number']) ?>
            <?= $form
                ->field($model, 'alamat', $fieldOptions5)
                ->label(false)
                ->textarea(['placeholder' => $model->getAttributeLabel('alamat'),'rows' => 6]) ?>
            <?= $form
                ->field($model, 'username', $fieldOptions1)
                ->label(false)
                ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>
            <?= $form
                ->field($model, 'password', $fieldOptions3)
                ->label(false)
                ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>
            <div class="row">
                <div class="col-xs-12">
                <?= Html::a("<i class='fa fa-save'></i> DAFTAR", ["register"], [
                            "class"=>"btn btn-primary btn-block btn-flat",
                            "title"=>"Create",
                            'name' => 'login-button',
                            "data-confirm" => "Apakah Anda yakin data sudah benar ?",
                            //"data-method" => "GET"
                        ]); ?>
                        
                    <!-- <?= Html::submitButton("<i class='fa fa-save'></i> DAFTAR", ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?> -->
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>