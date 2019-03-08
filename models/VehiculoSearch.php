<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vehiculo;

/**
 * VehiculoSearch represents the model behind the search form of `app\models\Vehiculo`.
 */
class VehiculoSearch extends Vehiculo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_veh', 'modveh', 'pueveh', 'proveh'], 'integer'],
            [['plaveh', 'marveh', 'tipveh', 'chaveh', 'colveh', 'traveh'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Vehiculo::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_veh' => $this->id_veh,
            'modveh' => $this->modveh,
            'pueveh' => $this->pueveh,
            'proveh' => $this->proveh,
        ]);

        $query->andFilterWhere(['like', 'plaveh', $this->plaveh])
            ->andFilterWhere(['like', 'marveh', $this->marveh])
            ->andFilterWhere(['like', 'tipveh', $this->tipveh])
            ->andFilterWhere(['like', 'chaveh', $this->chaveh])
            ->andFilterWhere(['like', 'colveh', $this->colveh])
            ->andFilterWhere(['like', 'traveh', $this->traveh]);

        return $dataProvider;
    }
}
