<?php
/**
 * Created by PhpStorm.
 * User: feb
 * Date: 30/05/16
 * Time: 00.14
 */

namespace app\components;

use yii\helpers\Html;
    class ActionApproveButton
    {
        
        public static function getApprovePelaksana()
        {
            return [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{approve-pelaksana}',
                'visible'=>\Yii::$app->user->identity->role_id ==1 || \Yii::$app->user->identity->role_id ==4,
                'header' => 'Approve Pelaksana',
                'buttons' => [
                  'approve-pelaksana' => function ($url, $model, $key) {
                    if($model->status ==0){
                      return Html::a("<i class='fa fa-check'></i>", ["approve-pelaksana", "id"=>$model->id], [
                          "class"=>"btn btn-success",
                          "title"=>"Approve pelaksana",
                          "data-confirm" => "Apakah Anda yakin ingin menyetujui data ini ?",
                      ]);
                    }
                  },
                  'cancel' => function ($url, $model, $key) {
                    if($model->status ==0){
                    return Html::a("<i class='fa fa-times'></i>", ["cancel", "id"=>$model->id], [
                        "class"=>"btn btn-danger",
                        "title"=>"Cancel",
                        "data-confirm" => "Apakah Anda yakin ingin menolak data ini ?",
                    ]);
                    }
                },
    
                ],
                'contentOptions' => ['nowrap'=>'nowrap', 'style'=>'text-align:center;width:140px']
            ];
        }
        public static function getApproveKasi()
        {
            return [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{approve-kasi}',
                'visible'=>\Yii::$app->user->identity->role_id ==1 || \Yii::$app->user->identity->role_id ==5,
                'header' => 'Approve Kasi',
                'buttons' => [
                  'approve-kasi' => function ($url, $model, $key) {
                    if($model->status ==1){
                      return Html::a("<i class='fa fa-check'></i>", ["approve-kasi", "id"=>$model->id], [
                          "class"=>"btn btn-success",
                          "title"=>"Approve Kasi",
                          "data-confirm" => "Apakah Anda yakin ingin menyetujui data ini ?",
                      ]);
                    }
                  },
                  'cancel' => function ($url, $model, $key) {
                    if($model->status ==1){
                    return Html::a("<i class='fa fa-times'></i>", ["cancel", "id"=>$model->id], [
                        "class"=>"btn btn-danger",
                        "title"=>"Cancel",
                        "data-confirm" => "Apakah Anda yakin ingin menolak data ini ?",
                    ]);
                    }
                },
                ],
                'contentOptions' => ['nowrap'=>'nowrap', 'style'=>'text-align:center;width:140px']
            ];
        }
        public static function getApproveKabid()
        {
            return [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{approve-kabid}',
                'visible'=>\Yii::$app->user->identity->role_id ==6,
                'header' => 'Approve Kabid',
                'buttons' => [
                  'approve-kabid' => function ($url, $model, $key) {
                    if($model->status ==2){
                      return Html::a("<i class='fa fa-check'></i>", ["approve-kabid", "id"=>$model->id], [
                          "class"=>"btn btn-success",
                          "title"=>"Approve Kabid",
                          "data-confirm" => "Apakah Anda yakin ingin menyetujui surat ini ?",
                      ]);
                    }
                  },
                ],
                'contentOptions' => ['nowrap'=>'nowrap', 'style'=>'text-align:center;width:140px']
            ];
        }
        public static function getApproveKepalaDinas()
        {
            return [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{approve-kepala-dinas}',
                'visible'=> \Yii::$app->user->identity->role_id ==7,
                'header' => 'Approve Kepala Dinas',
                'buttons' => [
                  'approve-kepala-dinas' => function ($url, $model, $key) {
                    if($model->status ==3){
                      return Html::a("<i class='fa fa-check'></i>", ["approve-kepala-dinas", "id"=>$model->id], [
                          "class"=>"btn btn-success",
                          "title"=>"Approve kepala-dinas",
                          "data-confirm" => "Apakah Anda yakin ingin menyetujui surat ini ?",
                      ]);
                    }
                  },
                ],
                'contentOptions' => ['nowrap'=>'nowrap', 'style'=>'text-align:center;width:140px']
            ];
        }
    }

