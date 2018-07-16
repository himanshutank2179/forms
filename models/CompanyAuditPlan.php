<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company_audit_plan".
 *
 * @property int $company_audit_plan_id
 * @property string $audit_plan_date
 * @property string $audit_first_date
 * @property string $audit_last_date
 * @property int $company_id
 * @property string $remark
 * @property string $created_at
 */
class CompanyAuditPlan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company_audit_plan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['audit_plan_date', 'audit_first_date', 'audit_last_date', 'company_id', 'created_at'], 'required'],
            [['audit_plan_date', 'audit_first_date', 'audit_last_date', 'created_at'], 'safe'],
            [['company_id'], 'integer'],
            [['remark'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'company_audit_plan_id' => 'Company Audit Plan ID',
            'audit_plan_date' => 'Audit Plan Date',
            'audit_first_date' => 'Audit First Date',
            'audit_last_date' => 'Audit Last Date',
            'company_id' => 'Company ID',
            'remark' => 'Remark',
            'created_at' => 'Created At',
        ];
    }
}
