<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Trabajo;

/**
 * TrabajoSearch represents the model behind the search form of `app\models\Trabajo`.
 */
class TrabajoSearch extends Trabajo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tra', 'vehtra'], 'integer'],
            [['esttra', 'initra', 'fintra', 'restra'], 'safe'],
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
        $query = Trabajo::find();

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
            'id_tra' => $this->id_tra,
            'vehtra' => $this->vehtra,
            'initra' => $this->initra,
            'fintra' => $this->fintra,
        ]);

        $query->andFilterWhere(['like', 'esttra', $this->esttra])
            ->andFilterWhere(['like', 'restra', $this->restra]);

        return $dataProvider;
    }
}
