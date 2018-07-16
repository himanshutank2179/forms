<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "audit_plan_standard".
 *
 * @property int $audit_plan_standard_id
 * @property string $standard_doc_record_management
 * @property string $standard_quality_policy
 * @property string $standard_responsibility
 * @property string $standard_planning_and_determination
 * @property string $standard_production_control
 * @property string $standard_monitoring
 * @property int $company_id
 */
class AuditPlanStandard extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audit_plan_standard';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['standard_doc_record_management', 'standard_quality_policy', 'standard_responsibility', 'standard_planning_and_determination', 'standard_production_control', 'standard_monitoring', 'company_id'], 'required'],
            [['standard_doc_record_management', 'standard_quality_policy', 'standard_responsibility', 'standard_planning_and_determination', 'standard_production_control', 'standard_monitoring'], 'string'],
            [['company_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'audit_plan_standard_id' => 'Audit Plan Standard ID',
            'standard_doc_record_management' => 'Standard Doc Record Management',
            'standard_quality_policy' => 'Standard Quality Policy',
            'standard_responsibility' => 'Standard Responsibility',
            'standard_planning_and_determination' => 'Standard Planning And Determination',
            'standard_production_control' => 'Standard Production Control',
            'standard_monitoring' => 'Standard Monitoring',
            'company_id' => 'Company ID',
        ];
    }
}
