<?php
/**
 * Created by PhpStorm.
 * User: feb
 * Date: 30/05/16
 * Time: 00.14
 */

namespace app\components;


use yii\helpers\Html;

class ActionButton
{
    public static function getButtons()
    {
        return [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete}',
            'buttons' => [
                'view' => function ($url, $model, $key) {
                    return Html::a("<i class='fa fa-eye'></i>", ["view", "id"=>$model->id], ["class"=>"btn btn-success", "title"=>"Lihat Data"]);
                },
                'update' => function ($url, $model, $key) {
                    return Html::a("<i class='fa fa-pencil'></i>", ["update", "id"=>$model->id], ["class"=>"btn btn-warning", "title"=>"Edit Data"]);
                },
                'delete' => function ($url, $model, $key) {
                    return Html::a("<i class='fa fa-trash'></i>", ["delete", "id"=>$model->id], [
                        "class"=>"btn btn-danger",
                        "title"=>"Hapus Data",
                        "data-confirm" => "Apakah Anda yakin ingin menghapus data ini ?",
                        //"data-method" => "GET"
                    ]);
                },
            ],
            'contentOptions' => ['nowrap'=>'nowrap', 'style'=>'text-align:center;width:140px']
        ];
    }

    public static function getButtonsAktif()
    {
        return [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete}',
            'buttons' => [
                'view' => function ($url, $model, $key) {
                    return Html::a("<i class='fa fa-eye'></i>", ["view", "id"=>$model->id], ["class"=>"btn btn-success", "title"=>"Lihat Data"]);
                },
                'update' => function ($url, $model, $key) {
                    return Html::a("<i class='fa fa-pencil'></i>", ["update", "id"=>$model->id], ["class"=>"btn btn-warning", "title"=>"Edit Data"]);
                },
                'delete' => function ($url, $model, $key) {
                    if($model->deleted_status == 0){
                        return Html::a("<i class='fa fa-trash'></i>", ["non-aktif", "id"=>$model->id], [
                            "class"=>"btn btn-danger",
                            "title"=>"Hapus Data",
                            "data-confirm" => "Apakah Anda yakin ingin menghapus data ini ?",
                            //"data-method" => "GET"
                        ]);
                    }else{
                        return Html::a("<i class='fa fa-check'></i>", ["aktif", "id"=>$model->id], [
                            "class"=>"btn btn-success",
                            "title"=>"Publish Data",
                            "data-confirm" => "Apakah Anda yakin ingin mempublish data ini ?",
                            //"data-method" => "GET"
                        ]);
                    }
                    
                },
            ],
            'contentOptions' => ['nowrap'=>'nowrap', 'style'=>'text-align:center;width:140px']
        ];
    }

    public static function getButtonsPrint()
    {
        return [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete} {cetak} {update-exp}',
            'buttons' => [
                'view' => function ($url, $model, $key) {
                    return Html::a("<i class='fa fa-eye'></i>", ["view", "id"=>$model->id], ["class"=>"btn btn-success", "title"=>"Lihat Data"]);
                },
                'update' => function ($url, $model, $key) {
                    if($model->status == 0){
                        return Html::a("<i class='fa fa-pencil'></i>", ["update", "id"=>$model->id], ["class"=>"btn btn-warning", "title"=>"Edit Data"]);
                    }
                },
                'delete' => function ($url, $model, $key) {
                    if($model->status == 0){
                        return Html::a("<i class='fa fa-trash'></i>", ["delete", "id"=>$model->id], [
                            "class"=>"btn btn-danger",
                            "title"=>"Hapus Data",
                            "data-confirm" => "Apakah Anda yakin ingin menghapus data ini ?",
                            //"data-method" => "GET"
                        ]);
                    }                    
                },
                'cetak' => function ($url, $model, $key) {
                    if(date("Y-m-d") < $model->tanggal_exp && $model->status == 4 ){
                        return Html::a("<i class='fa fa-print'></i>", ["cetak", "id"=>$model->id], ["class"=>"btn btn-success", "title"=>"Cetak",'target' => '_blank']);
                    }
                },
                'update-exp' => function ($url, $model, $key) {
                    if($model->user_id == \Yii::$app->user->identity->id){
                        if($model->tanggal_exp != NULL){
                            if(date("Y-m-d") > $model->tanggal_exp){
                                return Html::a("<i class='fa fa-check'></i>", ["update-exp", "id"=>$model->id], [
                                    "class"=>"btn btn-success",
                                    "title"=>"Update Data",
                                    "data-confirm" => "Apakah Anda yakin ?",
                                ]);
                              }
                        }
                        
                    }
                  },
            ],
            'contentOptions' => ['nowrap'=>'nowrap', 'style'=>'text-align:center;width:140px']
        ];
    }
}