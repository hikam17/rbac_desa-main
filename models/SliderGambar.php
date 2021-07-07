<?php

namespace app\models;

use Yii;
use \app\models\base\SliderGambar as BaseSliderGambar;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "slider_gambar".
 */
class SliderGambar extends BaseSliderGambar
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
