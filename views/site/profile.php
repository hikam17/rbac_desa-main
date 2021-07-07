<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;

/**
 * @var yii\web\View $this
 * @var app\models\User $model
 */

$this->title = 'Profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2><?= $model->name ?></h2>
        </div>

        <div class="panel-body">

            <div class="user-form">

                <?php $form = ActiveForm::begin([
                        'id' => 'User',
                        'layout' => 'horizontal',
                        'enableClientValidation' => false,
                        'errorSummaryCssClass' => 'error-summary alert alert-error',
                        'options' => ['enctype' => 'multipart/form-data'],
                    ]
                );
                ?>

                <div class="container-items">
                    <?php $this->beginBlock('main'); ?>
                        <input type="tel" hidden /> <!-- disable chrome autofill -->
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <?= $form->field($model, 'name',[
                                'template' => '
                                    {label}
                                    {input}
                                    {error}
                                ',
                                'inputOptions' => [
                                    'class' => 'form-control'
                                ],
                                'labelOptions' => [
                                    'class' => 'control-label'
                                ],
                                    'options' => ['tag' => false]
                                ])->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <?= $form->field($model, 'email',[
                                'template' => '
                                    {label}
                                    {input}
                                    {error}
                                ',
                                'inputOptions' => [
                                    'class' => 'form-control'
                                ],
                                'labelOptions' => [
                                    'class' => 'control-label'
                                ],
                                    'options' => ['tag' => false]
                                ])->textInput(['maxlength' => true,'type'=>'email']) ?>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <?= $form->field($model, "password",[
                                'template' => '
                                    {label}
                                    {input}
                                    {error}
                                ',
                                'inputOptions' => [
                                    'class' => 'form-control'
                                ],
                                'labelOptions' => [
                                    'class' => 'control-label'
                                ],
                                    'options' => ['tag' => false]
                                ])->passwordInput(['maxlength' => true, 'autocomplete' => "off"]) ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <?= $form->field($model, 'nik',[
                                'template' => '
                                    {label}
                                    {input}
                                    {error}
                                ',
                                'inputOptions' => [
                                    'class' => 'form-control'
                                ],
                                'labelOptions' => [
                                    'class' => 'control-label'
                                ],
                                    'options' => ['tag' => false]
                                ])->textInput(['maxlength' => true,'type'=>'number']) ?>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <?php if(\Yii::$app->user->identity->role_id != 3){
                                echo  $form->field($model, 'nip',[
                                    'template' => '
                                        {label}
                                        {input}
                                        {error}
                                    ',
                                    'inputOptions' => [
                                        'class' => 'form-control'
                                    ],
                                    'labelOptions' => [
                                        'class' => 'control-label'
                                    ],
                                        'options' => ['tag' => false]
                                    ])->textInput(['maxlength' => true]); 
                                } 
                                ?>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <?= $form->field($model, 'no_hp',[
                                    'template' => '
                                        {label}
                                        {input}
                                        {error}
                                    ',
                                    'inputOptions' => [
                                        'class' => 'form-control'
                                    ],
                                    'labelOptions' => [
                                        'class' => 'control-label'
                                    ],
                                        'options' => ['tag' => false]
                                    ])->textInput(['maxlength' => true,'type'=>'number']) ?>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <?= $form->field($model, 'alamat',[
                                    'template' => '
                                        {label}
                                        {input}
                                        {error}
                                    ',
                                    'inputOptions' => [
                                        'class' => 'form-control'
                                    ],
                                    'labelOptions' => [
                                        'class' => 'control-label'
                                    ],
                                        'options' => ['tag' => false]
                                    ])->textInput(['rows' => 6]) ?>
                                </div>
                            </div>
                        
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <?= $form->field($model, 'photo_url',[
                                'template' => '
                                    {label}
                                    {input}
                                    {error}
                                ',
                                'inputOptions' => [
                                    'class' => 'form-control'
                                ],
                                'labelOptions' => [
                                    'class' => 'control-label'
                                ],
                                    'options' => ['tag' => false]
                                ])->widget(\kartik\file\FileInput::className(), [
                                    'options' => ['accept' => 'image/*'],
                                    'pluginOptions' => [
                                        'allowedFileExtensions' => ['jpg', 'png', 'jpeg', 'gif', 'bmp'],
                                        'maxFileSize' => 250,
                                    ],
                                ]) ?>
                                <?php
                                if($model->photo_url != null){
                                    ?>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <?= Html::img(["uploads/".$model->photo_url], ["width"=>"150px"]); ?>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <?= $form->field($model, 'ttd_digital',[
                                'template' => '
                                    {label}
                                    {input}
                                    {error}
                                ',
                                'inputOptions' => [
                                    'class' => 'form-control'
                                ],
                                'labelOptions' => [
                                    'class' => 'control-label'
                                ],
                                    'options' => ['tag' => false]
                                ])->widget(\kartik\file\FileInput::className(), [
                                    'options' => ['accept' => 'image/*'],
                                    'pluginOptions' => [
                                        'allowedFileExtensions' => ['jpg', 'png', 'jpeg', 'gif', 'bmp'],
                                        'maxFileSize' => 2000,
                                    ],
                                ]) ?>
                                <?php
                                if($model->ttd_digital != null){
                                    ?>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <?= Html::img(["uploads/ttd_digital/".$model->ttd_digital], ["width"=>"150px"]); ?>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>                    
                    <?php $this->endBlock(); ?>

                    <?=
                    Tabs::widget(
                        [
                            'encodeLabels' => false,
                            'items' => [[
                                'label' => 'User',
                                'content' => $this->blocks['main'],
                                'active' => true,
                            ],]
                        ]
                    );
                    ?>
                    <hr/>
                    <?php echo $form->errorSummary($model); ?>
                    <?= Html::submitButton(
                        '<span class="glyphicon glyphicon-check"></span> ' .
                        ($model->isNewRecord ? 'Create' : 'Save'),
                        [
                            'id' => 'save-' . $model->formName(),
                            'class' => 'btn btn-success'
                        ]
                    );
                    ?>

                    <?php ActiveForm::end(); ?>

                </div>

            </div>

        </div>

    </div>

</div>
