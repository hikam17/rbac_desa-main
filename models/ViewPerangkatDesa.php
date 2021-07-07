<?php

namespace app\models;

use Yii;
use \app\models\base\ViewPerangkatDesa as BaseViewPerangkatDesa;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "view_perangkat_desa".
 */
class ViewPerangkatDesa extends BaseViewPerangkatDesa
{

    public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
            parent::rules(),
            [
                # custom validation rules
            ]
        );
    }
}
