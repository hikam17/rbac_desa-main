<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "perangkat_desa".
 *
 * @property integer $id
 * @property string $nama
 * @property string $alamat
 * @property integer $jabatan
 * @property string $tanggal_lahir
 * @property string $tanggal_mulai_tugas
 * @property string $sk_pengangkatan
 * @property string $foto
 *
 * @property \app\models\Jabatan $jabatan0
 * @property string $aliasModel
 */
abstract class PerangkatDesa extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perangkat_desa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'jabatan', 'tanggal_lahir', 'sk_pengangkatan'], 'required'],
            [['alamat'], 'string'],
            [['jabatan'], 'integer'],
            [['tanggal_lahir', 'tanggal_mulai_tugas'], 'safe'],
            [['nama', 'sk_pengangkatan', 'foto'], 'string', 'max' => 255],
            [['jabatan'], 'exist', 'skipOnError' => true, 'targetClass' => \app\models\Jabatan::className(), 'targetAttribute' => ['jabatan' => 'id']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'jabatan' => 'Jabatan',
            'tanggal_lahir' => 'Tanggal Lahir',
            'tanggal_mulai_tugas' => 'Tanggal Mulai Tugas',
            'sk_pengangkatan' => 'Sk Pengangkatan',
            'foto' => 'Foto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJabatans()
    {
        return $this->hasOne(\app\models\Jabatan::className(), ['id' => 'jabatan']);
    }




}