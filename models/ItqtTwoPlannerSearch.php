<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ItqtTwoPlanner;

/**
 * ItqtTwoPlannerSearch represents the model behind the search form of `app\models\ItqtTwoPlanner`.
 */
class ItqtTwoPlannerSearch extends ItqtTwoPlanner
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['itqt_two_planner_id'], 'integer'],
            [['process', 'parameter', 'width', 'height', 'size', 'weight', 'color', 'length', 'thickness', 'straightness', 'ovality', 'tolerance', 'process_standard_parameter', 'sampling_plan', 'record', 'resposi_ability', 'created_at'], 'safe'],
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
        $query = ItqtTwoPlanner::find();

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
            'itqt_two_planner_id' => $this->itqt_two_planner_id,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'process', $this->process])
            ->andFilterWhere(['like', 'parameter', $this->parameter])
            ->andFilterWhere(['like', 'width', $this->width])
            ->andFilterWhere(['like', 'height', $this->height])
            ->andFilterWhere(['like', 'size', $this->size])
            ->andFilterWhere(['like', 'weight', $this->weight])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'length', $this->length])
            ->andFilterWhere(['like', 'thickness', $this->thickness])
            ->andFilterWhere(['like', 'straightness', $this->straightness])
            ->andFilterWhere(['like', 'ovality', $this->ovality])
            ->andFilterWhere(['like', 'tolerance', $this->tolerance])
            ->andFilterWhere(['like', 'process_standard_parameter', $this->process_standard_parameter])
            ->andFilterWhere(['like', 'sampling_plan', $this->sampling_plan])
            ->andFilterWhere(['like', 'record', $this->record])
            ->andFilterWhere(['like', 'resposi_ability', $this->resposi_ability]);

        return $dataProvider;
    }
}
