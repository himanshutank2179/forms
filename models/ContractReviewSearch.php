<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ContractReview;

/**
 * ContractReviewSearch represents the model behind the search form of `app\models\ContractReview`.
 */
class ContractReviewSearch extends ContractReview
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contract_review_id', 'terms_condition_reviewed_detail'], 'integer'],
            [['customer_name', 'address', 'street', 'city', 'country', 'pincode', 'phone', 'fax_no', 'email', 'contact_person_name', 'designation', 'mobile', 'purchase_order_no', 'item_description', 'qty', 'testing_requirements', 'delivery_period', 'mode_of_dispatch', 'insurance', 'payment', 'packing_terms', 'other_terms_and_condition', 'cir_quotation_no', 'communication_of_order_conformation_no_date', 'material_specification', 'test_specification', 'mode_of_transport', 'reference_date_of_communicate_about_order_ready_for_inspection', 'reference_date_about_dispatch_of_material', 'conformation_about_satisfactory_receipt_of_ordered_item_and_qty'], 'safe'],
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
        $query = ContractReview::find();

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
            'contract_review_id' => $this->contract_review_id,
            'terms_condition_reviewed_detail' => $this->terms_condition_reviewed_detail,
        ]);

        $query->andFilterWhere(['like', 'customer_name', $this->customer_name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'street', $this->street])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'pincode', $this->pincode])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'fax_no', $this->fax_no])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'contact_person_name', $this->contact_person_name])
            ->andFilterWhere(['like', 'designation', $this->designation])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'purchase_order_no', $this->purchase_order_no])
            ->andFilterWhere(['like', 'item_description', $this->item_description])
            ->andFilterWhere(['like', 'qty', $this->qty])
            ->andFilterWhere(['like', 'testing_requirements', $this->testing_requirements])
            ->andFilterWhere(['like', 'delivery_period', $this->delivery_period])
            ->andFilterWhere(['like', 'mode_of_dispatch', $this->mode_of_dispatch])
            ->andFilterWhere(['like', 'insurance', $this->insurance])
            ->andFilterWhere(['like', 'payment', $this->payment])
            ->andFilterWhere(['like', 'packing_terms', $this->packing_terms])
            ->andFilterWhere(['like', 'other_terms_and_condition', $this->other_terms_and_condition])
            ->andFilterWhere(['like', 'cir_quotation_no', $this->cir_quotation_no])
            ->andFilterWhere(['like', 'communication_of_order_conformation_no_date', $this->communication_of_order_conformation_no_date])
            ->andFilterWhere(['like', 'material_specification', $this->material_specification])
            ->andFilterWhere(['like', 'test_specification', $this->test_specification])
            ->andFilterWhere(['like', 'mode_of_transport', $this->mode_of_transport])
            ->andFilterWhere(['like', 'reference_date_of_communicate_about_order_ready_for_inspection', $this->reference_date_of_communicate_about_order_ready_for_inspection])
            ->andFilterWhere(['like', 'reference_date_about_dispatch_of_material', $this->reference_date_about_dispatch_of_material])
            ->andFilterWhere(['like', 'conformation_about_satisfactory_receipt_of_ordered_item_and_qty', $this->conformation_about_satisfactory_receipt_of_ordered_item_and_qty]);

        return $dataProvider;
    }
}
