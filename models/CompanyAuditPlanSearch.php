<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CompanyAuditPlan;

/**
 * CompanyAuditPlanSearch represents the model behind the search form of `app\models\CompanyAuditPlan`.
 */
class CompanyAuditPlanSearch extends CompanyAuditPlan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_audit_plan_id', 'company_id'], 'integer'],
            [['audit_plan_date', 'audit_first_date', 'audit_last_date', 'remark', 'created_at'], 'safe'],
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
        $query = CompanyAuditPlan::find();

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
            'company_audit_plan_id' => $this->company_audit_plan_id,
            'audit_plan_date' => $this->audit_plan_date,
            'audit_first_date' => $this->audit_first_date,
            'audit_last_date' => $this->audit_last_date,
            'company_id' => $this->company_id,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'remark', $this->remark]);

        return $dataProvider;
    }
}
