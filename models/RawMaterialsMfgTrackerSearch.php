<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RawMaterialsMfgTracker;

/**
 * RawMaterialsMfgTrackerSearch represents the model behind the search form of `app\models\RawMaterialsMfgTracker`.
 */
class RawMaterialsMfgTrackerSearch extends RawMaterialsMfgTracker
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['raw_materials_mfg_tracker_id', 'product_id', 'starting_inventory', 're_order_point', 'purchases', 'available_now'], 'integer'],
            [['to_order'], 'safe'],
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
        $query = RawMaterialsMfgTracker::find();

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
            'raw_materials_mfg_tracker_id' => $this->raw_materials_mfg_tracker_id,
            'product_id' => $this->product_id,
            'starting_inventory' => $this->starting_inventory,
            're_order_point' => $this->re_order_point,
            'purchases' => $this->purchases,
            'available_now' => $this->available_now,
        ]);

        $query->andFilterWhere(['like', 'to_order', $this->to_order]);

        return $dataProvider;
    }
}
