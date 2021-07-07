<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "jabatan".
 *
 * @property integer $id
 * @property string $nama_jabatan
 *
 * @property \app\models\PerangkatDesa[] $perangkatDesas
 * @property string $aliasModel
 */
abstract class Jabatan extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jabatan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_jabatan'], 'required'],
            [['nama_jabatan'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_jabatan' => 'Nama Jabatan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerangkatDesas()
    {
        return $this->hasMany(\app\models\PerangkatDesa::className(), ['jabatan' => 'id']);
    }




}