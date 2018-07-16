<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "audit_plan_documents".
 *
 * @property int $audit_plan_document_id
 * @property int $company_id
 * @property string $document_name
 * @property string $document_no
 * @property int $reviewed
 */
class AuditPlanDocuments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audit_plan_documents';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id', 'document_name', 'document_no', 'reviewed'], 'required'],
            [['company_id', 'reviewed'], 'integer'],
            [['document_name', 'document_no'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'audit_plan_document_id' => 'Audit Plan Document ID',
            'company_id' => 'Company ID',
            'document_name' => 'Document Name',
            'document_no' => 'Document No',
            'reviewed' => 'Reviewed',
        ];
    }
}
