<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "audit_non_confirmities".
 *
 * @property int $audit_non_confirmities_id
 * @property int $design_dev Design and development application (7.3)
 * @property string $non_confirming_class
 * @property string $non_confirmitie
 * @property int $company_id
 */
class AuditNonConfirmities extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audit_non_confirmities';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['design_dev', 'non_confirming_class', 'non_confirmitie', 'company_id'], 'required'],
            [['design_dev', 'company_id'], 'integer'],
            [['non_confirming_class', 'non_confirmitie'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'audit_non_confirmities_id' => 'Audit Non Confirmities ID',
            'design_dev' => 'Design and development application (7.3)',
            'non_confirming_class' => 'Non Confirming Class',
            'non_confirmitie' => 'Non Confirmitie',
            'company_id' => 'Company ID',
        ];
    }
}
