<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OrderConformation;

/**
 * OrderConformationSearch represents the model behind the search form of `app\models\OrderConformation`.
 */
class OrderConformationSearch extends OrderConformation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_conformation_id', 'approved_by', 'is_deleted'], 'integer'],
            [['order_number', 'inquiry_date', 'delivery_period', 'our_quote_ref_num', 'mod_of_dispatch', 'payment_terms', 'inasurance', 'created_at','inspection_by'], 'safe'],
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
        $query = OrderConformation::find();

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
            'order_conformation_id' => $this->order_conformation_id,
            'inquiry_date' => $this->inquiry_date,
            'inspection_by' => $this->inspection_by,
            'approved_by' => $this->approved_by,
            'is_deleted' => $this->is_deleted,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'order_number', $this->order_number])
            ->andFilterWhere(['like', 'delivery_period', $this->delivery_period])
            ->andFilterWhere(['like', 'our_quote_ref_num', $this->our_quote_ref_num])
            ->andFilterWhere(['like', 'mod_of_dispatch', $this->mod_of_dispatch])
            ->andFilterWhere(['like', 'payment_terms', $this->payment_terms])
            ->andFilterWhere(['like', 'inasurance', $this->inasurance]);

        return $dataProvider;
    }
}
