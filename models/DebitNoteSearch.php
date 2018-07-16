<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DebitNote;

/**
 * DebitNoteSearch represents the model behind the search form of `app\models\DebitNote`.
 */
class DebitNoteSearch extends DebitNote
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['debit_note_id', 'is_deleted'], 'integer'],
            [['party_name', 'address1', 'address2', 'address3', 'debit_note_no', 'date', 'bill_no', 'bill_date', 'delivery_charges', 'party_gst_no', 'company_gst_no', 'party_gst', 'company_gst', 'total', 'remark', 'created_at'], 'safe'],
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
        $query = DebitNote::find();

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
            'debit_note_id' => $this->debit_note_id,
            'date' => $this->date,
            'bill_date' => $this->bill_date,
            'is_deleted' => $this->is_deleted,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'party_name', $this->party_name])
            ->andFilterWhere(['like', 'address1', $this->address1])
            ->andFilterWhere(['like', 'address2', $this->address2])
            ->andFilterWhere(['like', 'address3', $this->address3])
            ->andFilterWhere(['like', 'debit_note_no', $this->debit_note_no])
            ->andFilterWhere(['like', 'bill_no', $this->bill_no])
            ->andFilterWhere(['like', 'delivery_charges', $this->delivery_charges])
            ->andFilterWhere(['like', 'party_gst_no', $this->party_gst_no])
            ->andFilterWhere(['like', 'company_gst_no', $this->company_gst_no])
            ->andFilterWhere(['like', 'party_gst', $this->party_gst])
            ->andFilterWhere(['like', 'company_gst', $this->company_gst])
            ->andFilterWhere(['like', 'total', $this->total])
            ->andFilterWhere(['like', 'remark', $this->remark]);

        return $dataProvider;
    }
}
