<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BomMfgTracker;

/**
 * BomMfgTrackerSearch represents the model behind the search form of `app\models\BomMfgTracker`.
 */
class BomMfgTrackerSearch extends BomMfgTracker
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bom_mfg_tracker_id', 'product_id', 'raw_material_id', 'units', 'unit_of_measure_id', 'raw_material_units_used_till_now', 'available_raw_material', 'products_made', 'id_deleted'], 'integer'],
            [['created_at'], 'safe'],
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
        $query = BomMfgTracker::find();

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
            'bom_mfg_tracker_id' => $this->bom_mfg_tracker_id,
            'product_id' => $this->product_id,
            'raw_material_id' => $this->raw_material_id,
            'units' => $this->units,
            'unit_of_measure_id' => $this->unit_of_measure_id,
            'raw_material_units_used_till_now' => $this->raw_material_units_used_till_now,
            'available_raw_material' => $this->available_raw_material,
            'products_made' => $this->products_made,
            'id_deleted' => $this->id_deleted,
            'created_at' => $this->created_at,
        ]);

        return $dataProvider;
    }
}
