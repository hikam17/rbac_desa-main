<?php

namespace app\models;

use Yii;
use \app\models\base\ProfilDesa as BaseProfilDesa;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "profil_desa".
 */
class ProfilDesa extends BaseProfilDesa
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
