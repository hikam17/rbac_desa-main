<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProfilDesa;

/**
* ProfilDesaSearch represents the model behind the search form about `app\models\ProfilDesa`.
*/
class ProfilDesaSearch extends ProfilDesa
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id'], 'integer'],
            [['nama_desa', 'alamat', 'nomor_telepon', 'logo', 'visi_misi', 'sejarah', 'instagram', 'facebook', 'created_at', 'updated_at'], 'safe'],
            [['latitude', 'longitude'], 'number'],
];
}

/**
* @inheritdoc
*/
public function scenarios()
{
// bypass scenarios() implementation in the parent class
return Model::scenarios();
}

/**
* Creates data provider instance with search query applied
*
* @param array $params
*
* @return ActiveDataProvider
*/
public function search($params)
{
$query = ProfilDesa::find();

$dataProvider = new ActiveDataProvider([
'query' => $query,
]);

$this->load($params);

if (!$this->validate()) {
// uncomment the following line if you do not want to any records when validation fails
// $query->where('0=1');
return $dataProvider;
}

$query->andFilterWhere([
            'id' => $this->id,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'nama_desa', $this->nama_desa])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'nomor_telepon', $this->nomor_telepon])
            ->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'visi_misi', $this->visi_misi])
            ->andFilterWhere(['like', 'sejarah', $this->sejarah])
            ->andFilterWhere(['like', 'instagram', $this->instagram])
            ->andFilterWhere(['like', 'facebook', $this->facebook]);

return $dataProvider;
}
}