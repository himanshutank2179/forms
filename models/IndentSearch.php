<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Indent;

/**
 * IndentSearch represents the model behind the search form of `app\models\Indent`.
 */
class IndentSearch extends Indent
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['indent_id', 'reviewed_by'], 'integer'],
            [['purchase_indent_no', 'date', 'purchase_monitoring', 'remark', 'created_at'], 'safe'],
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
        $query = Indent::find();

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
            'indent_id' => $this->indent_id,
            'date' => $this->date,
            'reviewed_by' => $this->reviewed_by,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'purchase_indent_no', $this->purchase_indent_no])
            ->andFilterWhere(['like', 'purchase_monitoring', $this->purchase_monitoring])
            ->andFilterWhere(['like', 'remark', $this->remark]);

        return $dataProvider;
    }
}
