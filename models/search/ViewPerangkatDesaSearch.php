<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ViewPerangkatDesa;

/**
* ViewPerangkatDesaSearch represents the model behind the search form about `app\models\ViewPerangkatDesa`.
*/
class ViewPerangkatDesaSearch extends ViewPerangkatDesa
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id'], 'integer'],
            [['foto_1', 'foto_2', 'isi_perangkat_desa'], 'safe'],
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
$query = ViewPerangkatDesa::find();

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
        ]);

        $query->andFilterWhere(['like', 'foto_1', $this->foto_1])
            ->andFilterWhere(['like', 'foto_2', $this->foto_2])
            ->andFilterWhere(['like', 'isi_perangkat_desa', $this->isi_perangkat_desa]);

return $dataProvider;
}
}