<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AuditPlanStandard;

/**
 * AuditPlanStandardSearch represents the model behind the search form of `app\models\AuditPlanStandard`.
 */
class AuditPlanStandardSearch extends AuditPlanStandard
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['audit_plan_standard_id', 'company_id'], 'integer'],
            [['standard_doc_record_management', 'standard_quality_policy', 'standard_responsibility', 'standard_planning_and_determination', 'standard_production_control', 'standard_monitoring'], 'safe'],
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
        $query = AuditPlanStandard::find();

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
            'audit_plan_standard_id' => $this->audit_plan_standard_id,
            'company_id' => $this->company_id,
        ]);

        $query->andFilterWhere(['like', 'standard_doc_record_management', $this->standard_doc_record_management])
            ->andFilterWhere(['like', 'standard_quality_policy', $this->standard_quality_policy])
            ->andFilterWhere(['like', 'standard_responsibility', $this->standard_responsibility])
            ->andFilterWhere(['like', 'standard_planning_and_determination', $this->standard_planning_and_determination])
            ->andFilterWhere(['like', 'standard_production_control', $this->standard_production_control])
            ->andFilterWhere(['like', 'standard_monitoring', $this->standard_monitoring]);

        return $dataProvider;
    }
}
