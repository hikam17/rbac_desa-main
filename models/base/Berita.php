<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\SluggableBehavior;
use yii\db\Expression;

/**
 * This is the base-model class for table "berita".
 *
 * @property integer $id
 * @property string $judul
 * @property string $isi_berita
 * @property integer $kategori_id
 * @property string $gambar
 * @property string $slug
 * @property integer $created_by
 * @property integer $deleted_status
 * @property string $created_at
 * @property string $updated_at
 *
 * @property \app\models\User $createdBy
 * @property \app\models\KategoriBerita $kategori
 * @property string $aliasModel
 */
abstract class Berita extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'berita';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new Expression('NOW()'),
            ],
            [
                'class' => SluggableBehavior::class,
            'attribute' => 'judul',
            'slugAttribute' => 'slug',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul', 'isi_berita', 'kategori_id', 'gambar','created_by'], 'required'],
            [['isi_berita'], 'string'],
            [['kategori_id', 'created_by', 'deleted_status'], 'integer'],
            [['judul', 'gambar', 'slug'], 'string', 'max' => 255],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => \app\models\User::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['kategori_id'], 'exist', 'skipOnError' => true, 'targetClass' => \app\models\KategoriBerita::className(), 'targetAttribute' => ['kategori_id' => 'id']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'isi_berita' => 'Isi Berita',
            'kategori_id' => 'Kategori',
            'gambar' => 'Gambar',
            'slug' => 'Slug',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Dibuat Oleh',
            'deleted_status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(\app\models\User::className(), ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(\app\models\KategoriBerita::className(), ['id' => 'kategori_id']);
    }




}
