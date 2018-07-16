<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AuditPlanDocuments;

/**
 * AuditPlanDocumentsSearch represents the model behind the search form of `app\models\AuditPlanDocuments`.
 */
class AuditPlanDocumentsSearch extends AuditPlanDocuments
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['audit_plan_document_id', 'company_id', 'reviewed'], 'integer'],
            [['document_name', 'document_no'], 'safe'],
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
        $query = AuditPlanDocuments::find();

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
            'audit_plan_document_id' => $this->audit_plan_document_id,
            'company_id' => $this->company_id,
            'reviewed' => $this->reviewed,
        ]);

        $query->andFilterWhere(['like', 'document_name', $this->document_name])
            ->andFilterWhere(['like', 'document_no', $this->document_no]);

        return $dataProvider;
    }
}
