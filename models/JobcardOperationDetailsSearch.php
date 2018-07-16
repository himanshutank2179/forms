<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\JobcardOperationDetails;

/**
 * JobcardOperationDetailsSearch represents the model behind the search form of `app\models\JobcardOperationDetails`.
 */
class JobcardOperationDetailsSearch extends JobcardOperationDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jobcard_operation_detail_id', 'jobcard_id', 'operation_id', 'ok', 'rejected', 'total'], 'integer'],
            [['start_from', 'end_to', 'm_ch_ve', 'parameter', 'in_process_qc_no', 'final_qc_no', 'pressure_test_report_no', 'operator', 'remark'], 'safe'],
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
        $query = JobcardOperationDetails::find();

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
            'jobcard_operation_detail_id' => $this->jobcard_operation_detail_id,
            'jobcard_id' => $this->jobcard_id,
            'operation_id' => $this->operation_id,
            'start_from' => $this->start_from,
            'end_to' => $this->end_to,
            'ok' => $this->ok,
            'rejected' => $this->rejected,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'm_ch_ve', $this->m_ch_ve])
            ->andFilterWhere(['like', 'parameter', $this->parameter])
            ->andFilterWhere(['like', 'in_process_qc_no', $this->in_process_qc_no])
            ->andFilterWhere(['like', 'final_qc_no', $this->final_qc_no])
            ->andFilterWhere(['like', 'pressure_test_report_no', $this->pressure_test_report_no])
            ->andFilterWhere(['like', 'operator', $this->operator])
            ->andFilterWhere(['like', 'remark', $this->remark]);

        return $dataProvider;
    }
}
