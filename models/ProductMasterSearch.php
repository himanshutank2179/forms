<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProductMaster;

/**
 * ProductMasterSearch represents the model behind the search form of `app\models\ProductMaster`.
 */
class ProductMasterSearch extends ProductMaster
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_master_id'], 'integer'],
            [['product_name', 'generic_name', 'model', 'technical_spacifications', 'bill_of_material', 'is_purchase', 'is_deleted', 'created_at'], 'safe'],
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
        $query = ProductMaster::find();

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
            'product_master_id' => $this->product_master_id,
            'created_at' => $this->created_at,
        ]);

        if (Yii::$app->getRequest()->getQueryParam('type') != null) {
            $query->where(['is_purchase' => 1]);
        } else {
            $query->where(['is_purchase' => 0]);
        }

        $query->andFilterWhere(['like', 'product_name', $this->product_name])
            ->andFilterWhere(['like', 'generic_name', $this->generic_name])
            ->andFilterWhere(['like', 'model', $this->model])
            ->andFilterWhere(['like', 'technical_spacifications', $this->technical_spacifications])
            ->andFilterWhere(['like', 'bill_of_material', $this->bill_of_material])
            /*->andFilterWhere(['like', 'is_purchase', $this->is_purchase])*/
            ->andFilterWhere(['like', 'is_deleted', 0]);

        return $dataProvider;
    }
}
