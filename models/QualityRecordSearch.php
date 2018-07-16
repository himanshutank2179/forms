<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\QualityRecord;

/**
 * QualityRecordSearch represents the model behind the search form of `app\models\QualityRecord`.
 */
class QualityRecordSearch extends QualityRecord
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['quality_record_id'], 'integer'],
            [['title', 'quality_record_no', 'revision', 'date_of_issue', 'retension', 'frequency', 'maintend_by', 'medium', 'is_deleted', 'created_at'], 'safe'],
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
        $query = QualityRecord::find();

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
            'quality_record_id' => $this->quality_record_id,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'quality_record_no', $this->quality_record_no])
            ->andFilterWhere(['like', 'revision', $this->revision])
            ->andFilterWhere(['like', 'date_of_issue', $this->date_of_issue])
            ->andFilterWhere(['like', 'retension', $this->retension])
            ->andFilterWhere(['like', 'frequency', $this->frequency])
            ->andFilterWhere(['like', 'maintend_by', $this->maintend_by])
            ->andFilterWhere(['like', 'medium', $this->medium])
            ->andFilterWhere(['like', 'is_deleted', $this->is_deleted]);

        return $dataProvider;
    }
}
