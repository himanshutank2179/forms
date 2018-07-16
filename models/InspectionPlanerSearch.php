<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InspectionPlaner;

/**
 * InspectionPlanerSearch represents the model behind the search form of `app\models\InspectionPlaner`.
 */
class InspectionPlanerSearch extends InspectionPlaner
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inspection_planer_id', 'product_id', 'process_id', 'parameter_id', 'inspected_by', 'approved_by'], 'integer'],
            [['tolerance', 'inspection_stage', 'sampling_plan', 'test_method', 'record', 'created_at'], 'safe'],
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
        $query = InspectionPlaner::find();

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
            'inspection_planer_id' => $this->inspection_planer_id,
            'product_id' => $this->product_id,
            'process_id' => $this->process_id,
            'parameter_id' => $this->parameter_id,
            'inspected_by' => $this->inspected_by,
            'approved_by' => $this->approved_by,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'tolerance', $this->tolerance])
            ->andFilterWhere(['like', 'inspection_stage', $this->inspection_stage])
            ->andFilterWhere(['like', 'sampling_plan', $this->sampling_plan])
            ->andFilterWhere(['like', 'test_method', $this->test_method])
            ->andFilterWhere(['like', 'record', $this->record]);

        return $dataProvider;
    }
}
