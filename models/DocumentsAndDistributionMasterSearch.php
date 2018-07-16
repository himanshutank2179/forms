<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DocumentsAndDistributionMaster;

/**
 * DocumentsAndDistributionMasterSearch represents the model behind the search form of `app\models\DocumentsAndDistributionMaster`.
 */
class DocumentsAndDistributionMasterSearch extends DocumentsAndDistributionMaster
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['documents_and_distribution_master_id', 'is_deleted'], 'integer'],
            [['name_of_document', 'document_no', 'issue_no', 'revision', 'date_of_issue', 'copy_holders_department', 'sign_of_receiver', 'is_international', 'created_at'], 'safe'],
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
        $query = DocumentsAndDistributionMaster::find();

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
            'documents_and_distribution_master_id' => $this->documents_and_distribution_master_id,
            'date_of_issue' => $this->date_of_issue,
            'is_deleted' => $this->is_deleted,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'name_of_document', $this->name_of_document])
            ->andFilterWhere(['like', 'document_no', $this->document_no])
            ->andFilterWhere(['like', 'issue_no', $this->issue_no])
            ->andFilterWhere(['like', 'revision', $this->revision])
            ->andFilterWhere(['like', 'copy_holders_department', $this->copy_holders_department])
            ->andFilterWhere(['like', 'sign_of_receiver', $this->sign_of_receiver])
            ->andFilterWhere(['like', 'is_international', $this->is_international]);

        return $dataProvider;
    }
}
