<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OrderMfgTracker;

/**
 * OrderMfgTrackerSearch represents the model behind the search form of `app\models\OrderMfgTracker`.
 */
class OrderMfgTrackerSearch extends OrderMfgTracker
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_mfg_tracker_id', 'product_id', 'qty', 'is_deleted'], 'integer'],
            [['order_number', 'order_type', 'order_date', 'expected_date', 'notes', 'created_at'], 'safe'],
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
        $query = OrderMfgTracker::find();

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
            'order_mfg_tracker_id' => $this->order_mfg_tracker_id,
            'order_date' => $this->order_date,
            'expected_date' => $this->expected_date,
            'product_id' => $this->product_id,
            'qty' => $this->qty,
            'is_deleted' => $this->is_deleted,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'order_number', $this->order_number])
            ->andFilterWhere(['like', 'order_type', $this->order_type])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
