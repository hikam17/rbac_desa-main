<?php

namespace app\controllers\api;

/**
* This is the class for REST controller "DemografiController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class DemografiController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\Demografi';
}
