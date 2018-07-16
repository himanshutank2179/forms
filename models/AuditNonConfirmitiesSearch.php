<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AuditNonConfirmities;

/**
 * AuditNonConfirmitiesSearch represents the model behind the search form of `app\models\AuditNonConfirmities`.
 */
class AuditNonConfirmitiesSearch extends AuditNonConfirmities
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['audit_non_confirmities_id', 'design_dev', 'company_id'], 'integer'],
            [['non-confirming_class', 'non_confirmitie'], 'safe'],
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
        $query = AuditNonConfirmities::find();

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
            'audit_non_confirmities_id' => $this->audit_non_confirmities_id,
            'design_dev' => $this->design_dev,
            'company_id' => $this->company_id,
        ]);

        $query->andFilterWhere(['like', 'non-confirming_class', $this->non-confirming_class])
            ->andFilterWhere(['like', 'non_confirmitie', $this->non_confirmitie]);

        return $dataProvider;
    }
}
