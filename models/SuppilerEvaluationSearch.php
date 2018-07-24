<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SuppilerEvaluation;

/**
 * SuppilerEvaluationSearch represents the model behind the search form of `app\models\SuppilerEvaluation`.
 */
class SuppilerEvaluationSearch extends SuppilerEvaluation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sppiler_evaluation_id', 'vendor_id', 'total_po', 'purchase_qty', 'value', 'on_time_delevery', 'current_lot_size', 'total_supplied', 'accepted', 'rejected'], 'integer'],
            [['month', 'first_performance', 'second_performance', 'third_performance', 'total_marks', 'created_at'], 'safe'],
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
        $query = SuppilerEvaluation::find();

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
            'sppiler_evaluation_id' => $this->sppiler_evaluation_id,
            'vendor_id' => $this->vendor_id,
            'total_po' => $this->total_po,
            'purchase_qty' => $this->purchase_qty,
            'value' => $this->value,
            'on_time_delevery' => $this->on_time_delevery,
            'current_lot_size' => $this->current_lot_size,
            'total_supplied' => $this->total_supplied,
            'accepted' => $this->accepted,
            'rejected' => $this->rejected,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'month', $this->month])
            ->andFilterWhere(['like', 'first_performance', $this->first_performance])
            ->andFilterWhere(['like', 'second_performance', $this->second_performance])
            ->andFilterWhere(['like', 'third_performance', $this->third_performance])
            ->andFilterWhere(['like', 'total_marks', $this->total_marks]);

        return $dataProvider;
    }
}
