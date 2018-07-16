<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PurchaseReceipt;

/**
 * PurchaseReceiptSearch represents the model behind the search form of `app\models\PurchaseReceipt`.
 */
class PurchaseReceiptSearch extends PurchaseReceipt
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['purchase_receipt_id', 'product_id', 'receive_qty', 'rejected_qty', 'accepted_qty', 'unit_price'], 'integer'],
            [['GRN_NO', 'unit', 'order_no', 'remark'], 'safe'],
            [['cgst', 'sgst', 'igst', 'total_amount'], 'number'],
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
        $query = PurchaseReceipt::find();

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
            'purchase_receipt_id' => $this->purchase_receipt_id,
            'product_id' => $this->product_id,
            'receive_qty' => $this->receive_qty,
            'rejected_qty' => $this->rejected_qty,
            'accepted_qty' => $this->accepted_qty,
            'unit_price' => $this->unit_price,
            'cgst' => $this->cgst,
            'sgst' => $this->sgst,
            'igst' => $this->igst,
            'total_amount' => $this->total_amount,
        ]);

        $query->andFilterWhere(['like', 'GRN_NO', $this->GRN_NO])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'order_no', $this->order_no])
            ->andFilterWhere(['like', 'remark', $this->remark]);

        return $dataProvider;
    }
}
