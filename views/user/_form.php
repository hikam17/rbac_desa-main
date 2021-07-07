<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
/**
 * @var yii\web\View $this
 * @var app\models\User $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>
            <?= $model->name ?>        </h2>
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

            <div class="">
                <?php $this->beginBlock('main'); ?>

                <p>

                    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'email')->textInput(['maxlength' => true,'type'=>'email']) ?>
                    <?= $form->field($model, 'nik')->textInput(['maxlength' => true,'type'=>'number']) ?>
                    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true,'type'=>'number']) ?>
                    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>
                    <?= // generated by schmunk42\giiant\generators\crud\providers\RelationProvider::activeField
                    $form->field($model, 'role_id')->dropDownList(
                        \yii\helpers\ArrayHelper::map(app\models\Role::find()->all(), 'id', 'name'),
                        ['prompt' => 'Select']
                    ); ?>
                    <?= $form->field($model, 'photo_url')->widget(\kartik\file\FileInput::className(), [
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
            <?= $form->field($model, 'ttd_digital')->widget(\kartik\file\FileInput::className(), [
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

                </p>
                <?php $this->endBlock(); ?>

                <?=
                Tabs::widget(
                    [
                        'encodeLabels' => false,
                        'items' => [ [
                            'label'   => 'User',
                            'content' => $this->blocks['main'],
                            'active'  => true,
                        ], ]
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