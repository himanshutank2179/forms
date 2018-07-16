<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TrainingPlanner;

/**
 * TrainingPlannerSearch represents the model behind the search form of `app\models\TrainingPlanner`.
 */
class TrainingPlannerSearch extends TrainingPlanner
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['training_planner_id', 'user_id', 'actual_trining_date','is_trained'], 'integer'],
            [['name_of_training', 'period', 'type_of_training', 'designation', 'faculty', 'training_feedback'], 'safe'],
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
        $query = TrainingPlanner::find();

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
            'training_planner_id' => $this->training_planner_id,
            'user_id' => $this->user_id,
            'is_trained' => $this->is_trained,
            'actual_trining_date' => $this->actual_trining_date,
        ]);

        $query->andFilterWhere(['like', 'name_of_training', $this->name_of_training])
            ->andFilterWhere(['like', 'period', $this->period])
            ->andFilterWhere(['like', 'type_of_training', $this->type_of_training])
            ->andFilterWhere(['like', 'designation', $this->designation])
            ->andFilterWhere(['like', 'faculty', $this->faculty])
            ->andFilterWhere(['like', 'training_feedback', $this->training_feedback]);

        return $dataProvider;
    }
}
