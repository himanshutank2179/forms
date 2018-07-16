<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Employee;

/**
 * EmployeeSearch represents the model behind the search form of `app\models\Employee`.
 */
class EmployeeSearch extends Employee
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employee_id', 'responsibility_id', 'is_deleted'], 'integer'],
            [['emp_code', 'name', 'education_qualification', 'professional_education', 'designation', 'experience', 'authority', 'signature_of_staff', 'created_at'], 'safe'],
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
        $query = Employee::find();

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
            'employee_id' => $this->employee_id,
            'responsibility_id' => $this->responsibility_id,
            'is_deleted' => $this->is_deleted,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'emp_code', $this->emp_code])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'education_qualification', $this->education_qualification])
            ->andFilterWhere(['like', 'professional_education', $this->professional_education])
            ->andFilterWhere(['like', 'designation', $this->designation])
            ->andFilterWhere(['like', 'experience', $this->experience])
            ->andFilterWhere(['like', 'authority', $this->authority])
            ->andFilterWhere(['like', 'signature_of_staff', $this->signature_of_staff]);

        return $dataProvider;
    }
}
