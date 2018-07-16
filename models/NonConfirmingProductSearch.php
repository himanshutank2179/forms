<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NonConfirmingProduct;

/**
 * NonConfirmingProductSearch represents the model behind the search form of `app\models\NonConfirmingProduct`.
 */
class NonConfirmingProductSearch extends NonConfirmingProduct
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['non_confirming_product_id', 'product_id', 'return_to_vendor_qty', 'rework_qty', 'scrap_qty', 'sales_on_discount_qty', 'is_deleted'], 'integer'],
            [['date', 'GRN_NO', 'resion', 'balance', 'sign_of_prod', 'created_at'], 'safe'],
            [['qty'], 'number'],
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
        $query = NonConfirmingProduct::find();

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
            'non_confirming_product_id' => $this->non_confirming_product_id,
            'date' => $this->date,
            'product_id' => $this->product_id,
            'qty' => $this->qty,
            'return_to_vendor_qty' => $this->return_to_vendor_qty,
            'rework_qty' => $this->rework_qty,
            'scrap_qty' => $this->scrap_qty,
            'sales_on_discount_qty' => $this->sales_on_discount_qty,
            'is_deleted' => $this->is_deleted,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'GRN_NO', $this->GRN_NO])
            ->andFilterWhere(['like', 'resion', $this->resion])
            ->andFilterWhere(['like', 'balance', $this->balance])
            ->andFilterWhere(['like', 'sign_of_prod', $this->sign_of_prod]);

        return $dataProvider;
    }
}
