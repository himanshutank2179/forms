<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CustomerCompaintReport;

/**
 * CustomerCompaintReportSearch represents the model behind the search form of `app\models\CustomerCompaintReport`.
 */
class CustomerCompaintReportSearch extends CustomerCompaintReport
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_compaint_report_id', 'customer_compaint_id', 'customer_id', 'product_id', 'incomming_qc_no'], 'integer'],
            [['date', 'date_of_receipt_of_compliant', 'received_by', 'made_of_receipt', 'date_of_dispatch', 'invoice_no', 'compaint_desc', 'compaint_nature', 'report_of_work', 'corrective_action', 'taken_action_result', 'proposed_action', 'analysed_by', 'closed_by', 'created_at'], 'safe'],
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
        $query = CustomerCompaintReport::find();

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
            'customer_compaint_report_id' => $this->customer_compaint_report_id,
            'customer_compaint_id' => $this->customer_compaint_id,
            'date' => $this->date,
            'date_of_receipt_of_compliant' => $this->date_of_receipt_of_compliant,
            'customer_id' => $this->customer_id,
            'product_id' => $this->product_id,
            'incomming_qc_no' => $this->incomming_qc_no,
            'date_of_dispatch' => $this->date_of_dispatch,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'received_by', $this->received_by])
            ->andFilterWhere(['like', 'made_of_receipt', $this->made_of_receipt])
            ->andFilterWhere(['like', 'invoice_no', $this->invoice_no])
            ->andFilterWhere(['like', 'compaint_desc', $this->compaint_desc])
            ->andFilterWhere(['like', 'compaint_nature', $this->compaint_nature])
            ->andFilterWhere(['like', 'report_of_work', $this->report_of_work])
            ->andFilterWhere(['like', 'corrective_action', $this->corrective_action])
            ->andFilterWhere(['like', 'taken_action_result', $this->taken_action_result])
            ->andFilterWhere(['like', 'proposed_action', $this->proposed_action])
            ->andFilterWhere(['like', 'analysed_by', $this->analysed_by])
            ->andFilterWhere(['like', 'closed_by', $this->closed_by]);

        return $dataProvider;
    }
}
