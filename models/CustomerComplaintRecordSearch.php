<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CustomerComplaintRecord;

/**
 * CustomerComplaintRecordSearch represents the model behind the search form of `app\models\CustomerComplaintRecord`.
 */
class CustomerComplaintRecordSearch extends CustomerComplaintRecord
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_complaint_record_id'], 'integer'],
            [['date', 'customer_name', 'customer_address', 'reference', 'type_of_complaint', 'product_name', 'c_responsibility', 'c_cataken', 'c_sign', 'p_responsibility', 'p_cataken', 'p_sign'], 'safe'],
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
        $query = CustomerComplaintRecord::find();

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
            'customer_complaint_record_id' => $this->customer_complaint_record_id,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'customer_name', $this->customer_name])
            ->andFilterWhere(['like', 'customer_address', $this->customer_address])
            ->andFilterWhere(['like', 'reference', $this->reference])
            ->andFilterWhere(['like', 'type_of_complaint', $this->type_of_complaint])
            ->andFilterWhere(['like', 'product_name', $this->product_name])
            ->andFilterWhere(['like', 'c_responsibility', $this->c_responsibility])
            ->andFilterWhere(['like', 'c_cataken', $this->c_cataken])
            ->andFilterWhere(['like', 'c_sign', $this->c_sign])
            ->andFilterWhere(['like', 'p_responsibility', $this->p_responsibility])
            ->andFilterWhere(['like', 'p_cataken', $this->p_cataken])
            ->andFilterWhere(['like', 'p_sign', $this->p_sign]);

        return $dataProvider;
    }
}
