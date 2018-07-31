<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OrderQuotation;

/**
 * OrderQuotationSearch represents the model behind the search form of `app\models\OrderQuotation`.
 */
class OrderQuotationSearch extends OrderQuotation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_quotation_id', 'inspection_by', 'approved_by', 'is_deleted'], 'integer'],
            [['inquiry_date', 'delivery_period', 'our_quote_ref_num', 'mod_of_dispatch', 'payment_terms', 'inasurance', 'created_at'], 'safe'],
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
    public function search($params, $type)
    {
        $query = OrderQuotation::find();

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
            'order_quotation_id' => $this->order_quotation_id,
            'inquiry_date' => $this->inquiry_date,
            'inspection_by' => $this->inspection_by,
            'approved_by' => $this->approved_by,
            'is_deleted' => $this->is_deleted,
            'created_at' => $this->created_at,
            'type' => $type,
        ]);

        $query->andFilterWhere(['like', 'delivery_period', $this->delivery_period])
            ->andFilterWhere(['like', 'our_quote_ref_num', $this->our_quote_ref_num])
            ->andFilterWhere(['like', 'mod_of_dispatch', $this->mod_of_dispatch])
            ->andFilterWhere(['like', 'payment_terms', $this->payment_terms])
            ->andFilterWhere(['like', 'inasurance', $this->inasurance]);

        return $dataProvider;
    }
}
