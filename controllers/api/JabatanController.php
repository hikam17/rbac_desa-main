<?php

namespace app\controllers\api;

/**
* This is the class for REST controller "JabatanController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class JabatanController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\Jabatan';
}
