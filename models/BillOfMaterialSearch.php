<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BillOfMaterial;

/**
 * BillOfMaterialSearch represents the model behind the search form of `app\models\BillOfMaterial`.
 */
class BillOfMaterialSearch extends BillOfMaterial
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bill_of_material_id', 'raw_materia_id', 'unit_id', 'document_id', 'is_deleted'], 'integer'],
            [['qty', 'product_code', 'procuring_by', 'created_at'], 'safe'],
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
        $query = BillOfMaterial::find();

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
            'bill_of_material_id' => $this->bill_of_material_id,
            'raw_materia_id' => $this->raw_materia_id,
            'unit_id' => $this->unit_id,
            'document_id' => $this->document_id,
            'is_deleted' => $this->is_deleted,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'qty', $this->qty])
            ->andFilterWhere(['like', 'product_code', $this->product_code])
            ->andFilterWhere(['like', 'procuring_by', $this->procuring_by]);

        return $dataProvider;
    }
}
