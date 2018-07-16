<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TrainingMaster;

/**
 * TrainingMasterSearch represents the model behind the search form of `app\models\TrainingMaster`.
 */
class TrainingMasterSearch extends TrainingMaster
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['training_master_id'], 'integer'],
            [['name_of_training', 'period'], 'safe'],
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
        $query = TrainingMaster::find();

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
            'training_master_id' => $this->training_master_id,
        ]);

        $query->andFilterWhere(['like', 'name_of_training', $this->name_of_training])
            ->andFilterWhere(['like', 'period', $this->period]);

        return $dataProvider;
    }
}
