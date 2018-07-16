<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jobcard;

/**
 * JobcardSearch represents the model behind the search form of `app\models\Jobcard`.
 */
class JobcardSearch extends Jobcard
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jobcard_id', 'product_description', 'finish_product_id', 'is_deleted'], 'integer'],
            [['date', 'material', 'size', 'qty', 'class', 'remark', 'created_at'], 'safe'],
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
        $query = Jobcard::find();

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
            'jobcard_id' => $this->jobcard_id,
            'date' => $this->date,
            'finish_product_id' => $this->finish_product_id,
            'is_deleted' => $this->is_deleted,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'material', $this->material])
            ->andFilterWhere(['like', 'size', $this->size])
            ->andFilterWhere(['like', 'qty', $this->qty])
            ->andFilterWhere(['like', 'product_description', $this->product_description])
            ->andFilterWhere(['like', 'class', $this->class])
            ->andFilterWhere(['like', 'remark', $this->remark]);

        return $dataProvider;
    }
}
