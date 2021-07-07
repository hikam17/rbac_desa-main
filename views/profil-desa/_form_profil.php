<?php 
use kartik\file\FileInput;
use yii\helpers\Html;
?>
<?= $form->field($model, 'nama_desa')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>
<?= $form->field($model, 'nomor_telepon')->textInput(['maxlength' => true,'type'=> 'number']) ?>
<?= $form->field($model, 'logo',[
                    
                    'options' => ['tag' => false]])->widget(FileInput::classname(), [
                'options' => ['accept' => 'file/*'],
                'pluginOptions' => [
                    'allowedFileExtensions' => ['png','jpg','jpeg'],
                    'maxFileSize' => 6500,
                    'showRemove' => false,
                    'showUpload' => false,
                    'showCaption' => false,
                    'dropZoneEnabled' => false,
                    'browseLabel' => 'Upload File',
                ],
            ]);?> 
            <?php
                        if($model->logo != null){
                            ?>
                            <div class="form-group">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <?= Html::img(\Yii::$app->request->BaseUrl.'/uploads/profil_desa/logo/'.$model->logo,['width'=>100]); ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>