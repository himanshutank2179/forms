<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MachineMaster;

/**
 * MachineMasterSearch represents the model behind the search form of `app\models\MachineMaster`.
 */
class MachineMasterSearch extends MachineMaster
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['machine_master_id'], 'integer'],
            [['name', 'identification_no', 'mfg_by', 'machine_sr_no', 'installation_date', 'capacity', 'purchase_cost', 'location', 'remark', 'is_deleted', 'created_at'], 'safe'],
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
        $query = MachineMaster::find();

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
            'machine_master_id' => $this->machine_master_id,
            'installation_date' => $this->installation_date,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'identification_no', $this->identification_no])
            ->andFilterWhere(['like', 'mfg_by', $this->mfg_by])
            ->andFilterWhere(['like', 'machine_sr_no', $this->machine_sr_no])
            ->andFilterWhere(['like', 'capacity', $this->capacity])
            ->andFilterWhere(['like', 'purchase_cost', $this->purchase_cost])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'is_deleted', $this->is_deleted]);

        return $dataProvider;
    }
}
