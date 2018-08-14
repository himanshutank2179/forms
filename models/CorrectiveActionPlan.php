<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "corrective_action_plan".
 *
 * @property int $corrective_action_plan_id Sr. No.
 * @property string $date Date:
 * @property string $department_id Department:
 * @property int $non_confirmitie Nonconformity Identified During :
 * @property string $non_confirmitie_desc Description of Non conformity: 
 * @property string $result_of_investigation Root Cause of Non-conformitiy (Result of Investigation) :
 * @property int $identified_by Identified By: 
 * @property string $c_action_recomand C-Action Recommended:
 * @property int $responsibility Responsibility
 * @property string $evidence C-Action Taken(Evidence)
 * @property int $taken_by Taken By :
 * @property string $document_change Summary of Any Preventive Action Taken / Document Change etc. :
 * @property string $correction_effect Review Effectiveness of Corrective & Preventive Action Taken:
 * @property string $applicable_doc Applicable Documentation
 * @property string $management_representative Management Representative
 */
class CorrectiveActionPlan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'corrective_action_plan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'department_id', 'non_confirmitie', 'non_confirmitie_desc', 'result_of_investigation', 'identified_by', 'c_action_recomand', 'responsibility', 'evidence', 'taken_by', 'document_change', 'correction_effect', 'applicable_doc', 'management_representative'], 'required'],
            [['date'], 'safe'],
            [['identified_by', 'responsibility', 'taken_by'], 'integer'],
            [['non_confirmitie_desc', 'result_of_investigation', 'evidence', 'document_change', 'correction_effect', 'applicable_doc'], 'string'],
            [['department_id', 'c_action_recomand', 'management_representative','non_confirmitie'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'corrective_action_plan_id' => 'Sr. No.',
            'date' => 'Date:',
            'department_id' => 'Department:',
            'non_confirmitie' => 'Nonconformity Identified During :',
            'non_confirmitie_desc' => 'Description of Non conformity: ',
            'result_of_investigation' => 'Root Cause of Non-conformitiy (Result of Investigation) :',
            'identified_by' => 'Identified By: ',
            'c_action_recomand' => 'C-Action Recommended:',
            'responsibility' => 'Responsibility',
            'evidence' => 'C-Action Taken(Evidence)',
            'taken_by' => 'Taken By :',
            'document_change' => 'Summary of Any Preventive Action Taken / Document Change etc. :',
            'correction_effect' => 'Review Effectiveness of Corrective & Preventive Action Taken:',
            'applicable_doc' => 'Applicable Documentation',
            'management_representative' => 'Management Representative',
        ];
    }

    public function getDepartment()
    {
        return $this->hasOne(Departments::className(), ['department_id' => 'department_id']);
    }

    public function getTakenBy()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'taken_by']);
    }

    public function getIdentifiedBy()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'identified_by']);
    }

    public function getResponsibility()
    {
        return $this->hasOne(Responsibility::className(), ['responsibility_id' => 'responsibility']);
    }
}
