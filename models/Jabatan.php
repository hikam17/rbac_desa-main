<?php

namespace app\models;

use Yii;
use \app\models\base\Jabatan as BaseJabatan;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "jabatan".
 */
class Jabatan extends BaseJabatan
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
