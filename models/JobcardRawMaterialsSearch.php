<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\JobcardRawMaterials;

/**
 * JobcardRawMaterialsSearch represents the model behind the search form of `app\models\JobcardRawMaterials`.
 */
class JobcardRawMaterialsSearch extends JobcardRawMaterials
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jobcard_raw_material_id', 'qty', 'heat_no', 'lot_no', 'tc_no', 'jobcard_id'], 'integer'],
            [['item_name'], 'safe'],
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
        $query = JobcardRawMaterials::find();

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
            'jobcard_raw_material_id' => $this->jobcard_raw_material_id,
            'qty' => $this->qty,
            'heat_no' => $this->heat_no,
            'lot_no' => $this->lot_no,
            'tc_no' => $this->tc_no,
            'jobcard_id' => $this->jobcard_id,
        ]);

        $query->andFilterWhere(['like', 'item_name', $this->item_name]);

        return $dataProvider;
    }
}
