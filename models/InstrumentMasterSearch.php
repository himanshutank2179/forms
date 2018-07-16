<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InstrumentMaster;

/**
 * InstrumentMasterSearch represents the model behind the search form of `app\models\InstrumentMaster`.
 */
class InstrumentMasterSearch extends InstrumentMaster
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['instrument_master_id'], 'integer'],
            [['name_of_instrument', 'instrument_identification_no', 'make_and_sr_no', 'capacity', 'least_count', 'acceptance_criteria', 'calibration_certi_no', 'date', 'next_due_on', 'sign_qc', 'is_deleted', 'created_at'], 'safe'],
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
        $query = InstrumentMaster::find();

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
            'instrument_master_id' => $this->instrument_master_id,
            'date' => $this->date,
            'next_due_on' => $this->next_due_on,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'name_of_instrument', $this->name_of_instrument])
            ->andFilterWhere(['like', 'instrument_identification_no', $this->instrument_identification_no])
            ->andFilterWhere(['like', 'make_and_sr_no', $this->make_and_sr_no])
            ->andFilterWhere(['like', 'capacity', $this->capacity])
            ->andFilterWhere(['like', 'least_count', $this->least_count])
            ->andFilterWhere(['like', 'acceptance_criteria', $this->acceptance_criteria])
            ->andFilterWhere(['like', 'calibration_certi_no', $this->calibration_certi_no])
            ->andFilterWhere(['like', 'sign_qc', $this->sign_qc])
            ->andFilterWhere(['like', 'is_deleted', $this->is_deleted]);

        return $dataProvider;
    }
}
