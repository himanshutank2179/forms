<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CustomerRequirements;

/**
 * CustomerRequirementsSearch represents the model behind the search form of `app\models\CustomerRequirements`.
 */
class CustomerRequirementsSearch extends CustomerRequirements
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_requirement_id', 'client_id', 'order_review_by', 'is_deleted'], 'integer'],
            [['date', 'address', 'product_info', 'quatation', 'quatation_ref', 'customer_po_number', 'date_of_dispatch', 'item', 'invoice_number', 'created_at'], 'safe'],
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
        $query = CustomerRequirements::find()->orderBy(['created_at' => SORT_DESC]);

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
            'customer_requirement_id' => $this->customer_requirement_id,
            'date' => $this->date,
            'client_id' => $this->client_id,
            'order_review_by' => $this->order_review_by,
            'created_at' => $this->created_at,
            'is_deleted' => $this->is_deleted,
        ]);

        $query->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'product_info', $this->product_info])
            ->andFilterWhere(['like', 'quatation', $this->quatation])
            ->andFilterWhere(['like', 'quatation_ref', $this->quatation_ref])
            ->andFilterWhere(['like', 'customer_po_number', $this->customer_po_number])
            ->andFilterWhere(['like', 'date_of_dispatch', $this->date_of_dispatch])
            ->andFilterWhere(['like', 'item', $this->item])
            ->andFilterWhere(['like', 'invoice_number', $this->invoice_number]);

        return $dataProvider;
    }
}
