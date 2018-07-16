<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ItqtOnePlanner;

/**
 * ItqtOnePlannerSearch represents the model behind the search form of `app\models\ItqtOnePlanner`.
 */
class ItqtOnePlannerSearch extends ItqtOnePlanner
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['itqt_one_planner_id', 'product_id'], 'integer'],
            [['parameter', 'sampling_plan', 'record', 'resposi_ability', 'created_at'], 'safe'],
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
        $query = ItqtOnePlanner::find();

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
            'itqt_one_planner_id' => $this->itqt_one_planner_id,
            'product_id' => $this->product_id,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'parameter', $this->parameter])
            ->andFilterWhere(['like', 'sampling_plan', $this->sampling_plan])
            ->andFilterWhere(['like', 'record', $this->record])
            ->andFilterWhere(['like', 'resposi_ability', $this->resposi_ability]);

        return $dataProvider;
    }
}
