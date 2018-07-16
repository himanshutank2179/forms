<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Parameters;

/**
 * ParametersSearch represents the model behind the search form of `app\models\Parameters`.
 */
class ParametersSearch extends Parameters
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parameter_id', 'unit'], 'integer'],
            [['name', 'value', 'tolerance','product_id'], 'safe'],
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
        $query = Parameters::find();

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
            'parameter_id' => $this->parameter_id,
            'unit' => $this->unit,
            'product_id' => $this->product_id,
            'is_deleted' => 0
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'value', $this->value])
            ->andFilterWhere(['like', 'tolerance', $this->tolerance]);

        return $dataProvider;
    }
}
