<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DndPlanDsn;

/**
 * DndPlanDsnSearch represents the model behind the search form of `app\models\DndPlanDsn`.
 */
class DndPlanDsnSearch extends DndPlanDsn
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dnd_plan_dsn_id', 'sr_no'], 'integer'],
            [['activities_to_perform', 'responsibility', 'resources_required', 'person_consulted', 'record', 'activity_to_be_reviewed_on', 'actual_dt_of_completion', 'remarks'], 'safe'],
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
        $query = DndPlanDsn::find();

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
            'dnd_plan_dsn_id' => $this->dnd_plan_dsn_id,
            'sr_no' => $this->sr_no,
        ]);

        $query->andFilterWhere(['like', 'activities_to_perform', $this->activities_to_perform])
            ->andFilterWhere(['like', 'responsibility', $this->responsibility])
            ->andFilterWhere(['like', 'resources_required', $this->resources_required])
            ->andFilterWhere(['like', 'person_consulted', $this->person_consulted])
            ->andFilterWhere(['like', 'record', $this->record])
            ->andFilterWhere(['like', 'activity_to_be_reviewed_on', $this->activity_to_be_reviewed_on])
            ->andFilterWhere(['like', 'actual_dt_of_completion', $this->actual_dt_of_completion])
            ->andFilterWhere(['like', 'remarks', $this->remarks]);

        return $dataProvider;
    }
}
