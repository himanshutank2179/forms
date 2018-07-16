<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OrderAmendment;

/**
 * OrderAmendmentSearch represents the model behind the search form of `app\models\OrderAmendment`.
 */
class OrderAmendmentSearch extends OrderAmendment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_amendment_id', 'is_deleted'], 'integer'],
            [['purchase_order_no', 'date', 'quotation_ref_no', 'revised_terms', 'total', 'delivery_period', 'delivery_required_at', 'made_of_dispatch', 'payment_terms', 'insurance', 'inspected_by', 'approved_by', 'created_at'], 'safe'],
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
        $query = OrderAmendment::find();

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
            'order_amendment_id' => $this->order_amendment_id,
            'date' => $this->date,
            'is_deleted' => $this->is_deleted,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'purchase_order_no', $this->purchase_order_no])
            ->andFilterWhere(['like', 'quotation_ref_no', $this->quotation_ref_no])
            ->andFilterWhere(['like', 'revised_terms', $this->revised_terms])
            ->andFilterWhere(['like', 'total', $this->total])
            ->andFilterWhere(['like', 'delivery_period', $this->delivery_period])
            ->andFilterWhere(['like', 'delivery_required_at', $this->delivery_required_at])
            ->andFilterWhere(['like', 'made_of_dispatch', $this->made_of_dispatch])
            ->andFilterWhere(['like', 'payment_terms', $this->payment_terms])
            ->andFilterWhere(['like', 'insurance', $this->insurance])
            ->andFilterWhere(['like', 'inspected_by', $this->inspected_by])
            ->andFilterWhere(['like', 'approved_by', $this->approved_by]);

        return $dataProvider;
    }
}
