<?php

namespace app\models;

use Yii;
use \app\models\base\PerangkatDesa as BasePerangkatDesa;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "perangkat_desa".
 */
class PerangkatDesa extends BasePerangkatDesa
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
