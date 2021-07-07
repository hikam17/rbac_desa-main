<?php
use dosamigos\tinymce\TinyMce;
?>
<?= $form->field($model, 'visi_misi')->widget(TinyMce::className(), [
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
            ]);?>
            <?= $form->field($model, 'sejarah')->widget(TinyMce::className(), [
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
            ]);?>