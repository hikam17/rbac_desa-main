<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use dosamigos\tinymce\TinyMce;
use kartik\file\FileInput;
/**
* @var yii\web\View $this
* @var app\models\Demografi $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="box box-info">
    <div class="box-body">
        <?php $form = ActiveForm::begin([
        'id' => 'Demografi',
        'layout' => 'horizontal',
        'enableClientValidation' => true,
        'errorSummaryCssClass' => 'error-summary alert alert-error'
        ]
        );
        ?>
        <?= $form->field($model, 'foto',[
                    
                    'options' => ['tag' => false]])->widget(FileInput::classname(), [
                'options' => ['accept' => 'file/*'],
                'pluginOptions' => [
                    'allowedFileExtensions' => ['jpg','jpeg','pdf','doc','docx'],
                    'maxFileSize' => 6500,
                    'showRemove' => false,
                    'showUpload' => false,
                    'showCaption' => false,
                    'dropZoneEnabled' => false,
                    'browseLabel' => 'Upload File',
                ],
            ]);?>
            <?= $form->field($model, 'isi_demografi')->widget(TinyMce::className(), [
                'options' => ['rows' => 6],
                'language' => 'us',
                'clientOptions' => [
                    'plugins' => [
                        "advlist autolink lists link charmap print preview anchor",
                        "searchreplace visualblocks code fullscreen",
                        "insertdatetime media table contextmenu paste"
                    ],
                    'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                ]
            ]);?>      <hr/>
        <?php echo $form->errorSummary($model); ?>
        <div class="row">
            <div class="col-md-offset-3 col-md-10">
                <?=  Html::submitButton('<i class="fa fa-save"></i> Simpan', ['class' => 'btn btn-success']); ?>
                <?=  Html::a('<i class="fa fa-chevron-left"></i> Kembali', ['index'], ['class' => 'btn btn-default']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>