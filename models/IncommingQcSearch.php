<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\IncommingQc;

/**
 * IncommingQcSearch represents the model behind the search form of `app\models\IncommingQc`.
 */
class IncommingQcSearch extends IncommingQc
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['incomming_qc_id', 'product_id', 'qty', 'inspected_by', 'approved_by', 'is_deleted'], 'integer'],
            [['sr_no', 'manufacturer', 'label_particulars', 'mfg_date', 'heat', 'lot', 'batch_no', 'v_test_no', 'date', 'visual_examination', 'dimensional_check', 'product_traceability_mark', 'remark', 'created_at','GRN_NO'], 'safe'],
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
        $query = IncommingQc::find();

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
            'incomming_qc_id' => $this->incomming_qc_id,
            'mfg_date' => $this->mfg_date,
            'date' => $this->date,
            'product_id' => $this->product_id,
            'qty' => $this->qty,
            'inspected_by' => $this->inspected_by,
            'approved_by' => $this->approved_by,
            'is_deleted' => 0,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'GRN_NO', $this->GRN_NO])
            ->andFilterWhere(['like', 'manufacturer', $this->manufacturer])
            ->andFilterWhere(['like', 'label_particulars', $this->label_particulars])
            ->andFilterWhere(['like', 'heat', $this->heat])
            ->andFilterWhere(['like', 'lot', $this->lot])
            ->andFilterWhere(['like', 'batch_no', $this->batch_no])
            ->andFilterWhere(['like', 'v_test_no', $this->v_test_no])

            ->andFilterWhere(['like', 'remark', $this->remark]);

        return $dataProvider;
    }
}
