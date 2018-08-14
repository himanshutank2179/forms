<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SupplierMaster;

/**
 * SupplierMasterSearch represents the model behind the search form of `app\models\SupplierMaster`.
 */
class SupplierMasterSearch extends SupplierMaster
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['supplier_master_id'], 'integer'],
            [['name', 'address', 'approved_for_product', 'rating_performance', 'grade', 'evaluated_by', 'approved_by'], 'safe'],
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
        $query = SupplierMaster::find();

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
            'supplier_master_id' => $this->supplier_master_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'approved_for_product', $this->approved_for_product])
            ->andFilterWhere(['like', 'rating_performance', $this->rating_performance])
            ->andFilterWhere(['like', 'grade', $this->grade])
            ->andFilterWhere(['like', 'evaluated_by', $this->evaluated_by])
            ->andFilterWhere(['like', 'approved_by', $this->approved_by]);

        return $dataProvider;
    }
}
