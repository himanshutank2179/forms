<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AuditElements;

/**
 * AuditElementsSearch represents the model behind the search form of `app\models\AuditElements`.
 */
class AuditElementsSearch extends AuditElements
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['audit_element_id', 'company_id', 'design_dev_boolean', 'quality_man_boolean', 'rec_control_boolean', 'management_commitment_boolean', 'customer_focus_boolean', 'quality_policy_boolean', 'quality_objectives_boolean', 'respo_autho_boolean', 'management_system_boolean', 'hr_boolean', 'infratructure_boolean', 'product_planning_boolean', 'determination_review_boolean', 'design_development_boolean', 'purchase_outsource_boolean', 'production_control_boolean', 'identification_boolean', 'monitoring_control_boolean', 'measurement_monitoring_boolean', 'internal_audits_boolean', 'continueal_improovement_boolean'], 'integer'],
            [['design_dev', 'quality_man', 'rec_control', 'management_commitment', 'customer_focus', 'quality_policy', 'quality_objectives', 'respo_autho', 'management_system', 'hr', 'infratructure', 'product_planning', 'determination_review', 'design_development', 'purchase_outsource', 'production_control', 'identification', 'monitoring_control', 'measurement_monitoring', 'internal_audits', 'continueal_improovement', 'strengths_of_the_company'], 'safe'],
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
        $query = AuditElements::find();

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
            'audit_element_id' => $this->audit_element_id,
            'company_id' => $this->company_id,
            'design_dev_boolean' => $this->design_dev_boolean,
            'quality_man_boolean' => $this->quality_man_boolean,
            'rec_control_boolean' => $this->rec_control_boolean,
            'management_commitment_boolean' => $this->management_commitment_boolean,
            'customer_focus_boolean' => $this->customer_focus_boolean,
            'quality_policy_boolean' => $this->quality_policy_boolean,
            'quality_objectives_boolean' => $this->quality_objectives_boolean,
            'respo_autho_boolean' => $this->respo_autho_boolean,
            'management_system_boolean' => $this->management_system_boolean,
            'hr_boolean' => $this->hr_boolean,
            'infratructure_boolean' => $this->infratructure_boolean,
            'product_planning_boolean' => $this->product_planning_boolean,
            'determination_review_boolean' => $this->determination_review_boolean,
            'design_development_boolean' => $this->design_development_boolean,
            'purchase_outsource_boolean' => $this->purchase_outsource_boolean,
            'production_control_boolean' => $this->production_control_boolean,
            'identification_boolean' => $this->identification_boolean,
            'monitoring_control_boolean' => $this->monitoring_control_boolean,
            'measurement_monitoring_boolean' => $this->measurement_monitoring_boolean,
            'internal_audits_boolean' => $this->internal_audits_boolean,
            'continueal_improovement_boolean' => $this->continueal_improovement_boolean,
        ]);

        $query->andFilterWhere(['like', 'design_dev', $this->design_dev])
            ->andFilterWhere(['like', 'quality_man', $this->quality_man])
            ->andFilterWhere(['like', 'rec_control', $this->rec_control])
            ->andFilterWhere(['like', 'management_commitment', $this->management_commitment])
            ->andFilterWhere(['like', 'customer_focus', $this->customer_focus])
            ->andFilterWhere(['like', 'quality_policy', $this->quality_policy])
            ->andFilterWhere(['like', 'quality_objectives', $this->quality_objectives])
            ->andFilterWhere(['like', 'respo_autho', $this->respo_autho])
            ->andFilterWhere(['like', 'management_system', $this->management_system])
            ->andFilterWhere(['like', 'hr', $this->hr])
            ->andFilterWhere(['like', 'infratructure', $this->infratructure])
            ->andFilterWhere(['like', 'product_planning', $this->product_planning])
            ->andFilterWhere(['like', 'determination_review', $this->determination_review])
            ->andFilterWhere(['like', 'design_development', $this->design_development])
            ->andFilterWhere(['like', 'purchase_outsource', $this->purchase_outsource])
            ->andFilterWhere(['like', 'production_control', $this->production_control])
            ->andFilterWhere(['like', 'identification', $this->identification])
            ->andFilterWhere(['like', 'monitoring_control', $this->monitoring_control])
            ->andFilterWhere(['like', 'measurement_monitoring', $this->measurement_monitoring])
            ->andFilterWhere(['like', 'internal_audits', $this->internal_audits])
            ->andFilterWhere(['like', 'continueal_improovement', $this->continueal_improovement])
            ->andFilterWhere(['like', 'strengths_of_the_company', $this->strengths_of_the_company]);

        return $dataProvider;
    }
}
