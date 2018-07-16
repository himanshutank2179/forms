<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PurchaseInventory;

/**
 * PurchaseInventorySearch represents the model behind the search form of `app\models\PurchaseInventory`.
 */
class PurchaseInventorySearch extends PurchaseInventory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inventory_id', 'product_id', 'initial_qty', 'current_qty'], 'integer'],
            [['unit_price'], 'number'],
            [['note', 'created_at'], 'safe'],
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
        $query = PurchaseInventory::find();

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
            'inventory_id' => $this->inventory_id,
            'product_id' => $this->product_id,
            'initial_qty' => $this->initial_qty,
            'current_qty' => $this->current_qty,
            'unit_price' => $this->unit_price,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'note', $this->note]);

        return $dataProvider;
    }
}
