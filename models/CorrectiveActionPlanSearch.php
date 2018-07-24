<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CorrectiveActionPlan;

/**
 * CorrectiveActionPlanSearch represents the model behind the search form of `app\models\CorrectiveActionPlan`.
 */
class CorrectiveActionPlanSearch extends CorrectiveActionPlan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['corrective_action_plan_id', 'non_confirmitie', 'identified_by', 'responsibility', 'taken_by'], 'integer'],
            [['date', 'department_id', 'non_confirmitie_desc', 'result_of_investigation', 'c_action_recomand', 'evidence', 'document_change', 'correction_effect', 'applicable_doc', 'management_representative'], 'safe'],
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
        $query = CorrectiveActionPlan::find();

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
            'corrective_action_plan_id' => $this->corrective_action_plan_id,
            'date' => $this->date,
            'non_confirmitie' => $this->non_confirmitie,
            'identified_by' => $this->identified_by,
            'responsibility' => $this->responsibility,
            'taken_by' => $this->taken_by,
        ]);

        $query->andFilterWhere(['like', 'department_id', $this->department_id])
            ->andFilterWhere(['like', 'non_confirmitie_desc', $this->non_confirmitie_desc])
            ->andFilterWhere(['like', 'result_of_investigation', $this->result_of_investigation])
            ->andFilterWhere(['like', 'c_action_recomand', $this->c_action_recomand])
            ->andFilterWhere(['like', 'evidence', $this->evidence])
            ->andFilterWhere(['like', 'document_change', $this->document_change])
            ->andFilterWhere(['like', 'correction_effect', $this->correction_effect])
            ->andFilterWhere(['like', 'applicable_doc', $this->applicable_doc])
            ->andFilterWhere(['like', 'management_representative', $this->management_representative]);

        return $dataProvider;
    }
}
