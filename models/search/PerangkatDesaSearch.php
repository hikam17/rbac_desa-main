<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PerangkatDesa;

/**
* PerangkatDesaSearch represents the model behind the search form about `app\models\PerangkatDesa`.
*/
class PerangkatDesaSearch extends PerangkatDesa
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id', 'jabatan'], 'integer'],
            [['nama', 'tanggal_lahir', 'tanggal_mulai_tugas', 'sk_pengangkatan', 'foto'], 'safe'],
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
$query = PerangkatDesa::find();

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
            'jabatan' => $this->jabatan,
            'tanggal_lahir' => $this->tanggal_lahir,
            'tanggal_mulai_tugas' => $this->tanggal_mulai_tugas,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'sk_pengangkatan', $this->sk_pengangkatan])
            ->andFilterWhere(['like', 'foto', $this->foto]);

return $dataProvider;
}
}