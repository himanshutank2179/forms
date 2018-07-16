<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "audit_elements".
 *
 * @property int $audit_element_id
 * @property int $company_id
 * @property string $design_dev Design and development application (7.3)
 * @property int $design_dev_boolean 0 = NO, 1 = YES
 * @property string $quality_man Quality manual and control of documents (4.2.2 and 4.2.3)
 * @property int $quality_man_boolean 0 = NO, 1 = YES
 * @property string $rec_control Control of records (4.2.4)
 * @property int $rec_control_boolean 0 = NO, 1 = YES
 * @property string $management_commitment Management commitment (5.1)
 * @property int $management_commitment_boolean 0 = NO, 1 = YES
 * @property string $customer_focus Customer focus, communication and satisfaction (5.2, 7.2.3 and 8.2.1)
 * @property int $customer_focus_boolean 0 = NO, 1 = YES
 * @property string $quality_policy Quality policy (5.3)
 * @property int $quality_policy_boolean 0 = NO, 1 = YES
 * @property string $quality_objectives Quality objectives and quality management system planning (5.4)
 * @property int $quality_objectives_boolean 0 = NO, 1 = YES
 * @property string $respo_autho Responsability and authority, management representative and internal communication (5.5)
 * @property int $respo_autho_boolean 0 = No, 1 = YES
 * @property string $management_system Management system review (5.6)
 * @property int $management_system_boolean 0 = No, 1 = YES
 * @property string $hr Human resources (6.2)
 * @property int $hr_boolean 0 = No, 1 = YES
 * @property string $infratructure Infrastructure and work environment (6.3 a 6.4)
 * @property int $infratructure_boolean 0 = No, 1 = YES
 * @property string $product_planning Planning of product realization (7.1)
 * @property int $product_planning_boolean 0 = No, 1 = YES
 * @property string $determination_review Determination and review of requirements related to the product (7.2.1 and 7.2.2)
 * @property int $determination_review_boolean 0 = No, 1 = YES
 * @property string $design_development 	Design and development (7.3)
 * @property int $design_development_boolean 0 = No, 1 = YES
 * @property string $purchase_outsource 	Purchasing and outsourcing (7.4)
 * @property int $purchase_outsource_boolean 0 = No, 1 = YES
 * @property string $production_control Control of production and service provision and its validation (7.5.1 and 7.5.2)
 * @property int $production_control_boolean 0 = No, 1 = YES
 * @property string $identification 	Identification and traceability, preservation of product and customer property (7.5.3, 7.5.5 and 7.5.4)
 * @property int $identification_boolean 0 = No, 1 = YES
 * @property string $monitoring_control Control of monitoring and measuring equipment (7.6)
 * @property int $monitoring_control_boolean 0 = No, 1 = YES
 * @property string $measurement_monitoring Monitoring and measurement of processes and product, control of nonconforming product (8.2.3, 8.2.4 and 8.3)
 * @property int $measurement_monitoring_boolean 0 = No, 1 = YES
 * @property string $internal_audits Internal audits, analysis of data (8.2.2 a 8.4)
 * @property int $internal_audits_boolean 0 = No, 1 = YES
 * @property string $continueal_improovement Continual improvement, corrective and preventive action (8.5.1, 8.5.2 and 8.5.3)
 * @property int $continueal_improovement_boolean 0 = No, 1 = YES
 * @property string $strengths_of_the_company
 */
class AuditElements extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audit_elements';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id', 'design_dev', 'design_dev_boolean', 'quality_man', 'quality_man_boolean', 'rec_control', 'rec_control_boolean', 'management_commitment', 'management_commitment_boolean', 'customer_focus', 'customer_focus_boolean', 'quality_policy', 'quality_policy_boolean', 'quality_objectives', 'quality_objectives_boolean', 'respo_autho', 'respo_autho_boolean', 'management_system', 'management_system_boolean', 'hr', 'hr_boolean', 'infratructure', 'infratructure_boolean', 'product_planning', 'product_planning_boolean', 'determination_review', 'determination_review_boolean', 'design_development', 'design_development_boolean', 'purchase_outsource', 'purchase_outsource_boolean', 'production_control', 'production_control_boolean', 'identification', 'identification_boolean', 'monitoring_control', 'monitoring_control_boolean', 'measurement_monitoring', 'measurement_monitoring_boolean', 'internal_audits', 'internal_audits_boolean', 'continueal_improovement', 'continueal_improovement_boolean', 'strengths_of_the_company'], 'required'],
            [['company_id', 'design_dev_boolean', 'quality_man_boolean', 'rec_control_boolean', 'management_commitment_boolean', 'customer_focus_boolean', 'quality_policy_boolean', 'quality_objectives_boolean', 'respo_autho_boolean', 'management_system_boolean', 'hr_boolean', 'infratructure_boolean', 'product_planning_boolean', 'determination_review_boolean', 'design_development_boolean', 'purchase_outsource_boolean', 'production_control_boolean', 'identification_boolean', 'monitoring_control_boolean', 'measurement_monitoring_boolean', 'internal_audits_boolean', 'continueal_improovement_boolean'], 'integer'],
            [['strengths_of_the_company'], 'string'],
            [['design_dev', 'quality_man', 'rec_control', 'management_commitment', 'customer_focus', 'quality_policy', 'quality_objectives', 'respo_autho', 'management_system', 'hr', 'infratructure', 'product_planning', 'determination_review', 'design_development', 'purchase_outsource', 'production_control', 'identification', 'monitoring_control', 'measurement_monitoring', 'internal_audits', 'continueal_improovement'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'audit_element_id' => 'Audit Element ID',
            'company_id' => 'Company ID',
            'design_dev' => 'Design and development application (7.3)',
            'design_dev_boolean' => '0 = NO, 1 = YES',
            'quality_man' => 'Quality manual and control of documents (4.2.2 and 4.2.3)',
            'quality_man_boolean' => '0 = NO, 1 = YES',
            'rec_control' => 'Control of records (4.2.4)',
            'rec_control_boolean' => '0 = NO, 1 = YES',
            'management_commitment' => 'Management commitment (5.1)',
            'management_commitment_boolean' => '0 = NO, 1 = YES',
            'customer_focus' => 'Customer focus, communication and satisfaction (5.2, 7.2.3 and 8.2.1)',
            'customer_focus_boolean' => '0 = NO, 1 = YES',
            'quality_policy' => 'Quality policy (5.3)',
            'quality_policy_boolean' => '0 = NO, 1 = YES',
            'quality_objectives' => 'Quality objectives and quality management system planning (5.4)',
            'quality_objectives_boolean' => '0 = NO, 1 = YES',
            'respo_autho' => 'Responsability and authority, management representative and internal communication (5.5)',
            'respo_autho_boolean' => '0 = No, 1 = YES',
            'management_system' => 'Management system review (5.6)',
            'management_system_boolean' => '0 = No, 1 = YES',
            'hr' => 'Human resources (6.2)',
            'hr_boolean' => '0 = No, 1 = YES',
            'infratructure' => 'Infrastructure and work environment (6.3 a 6.4)',
            'infratructure_boolean' => '0 = No, 1 = YES',
            'product_planning' => 'Planning of product realization (7.1)',
            'product_planning_boolean' => '0 = No, 1 = YES',
            'determination_review' => 'Determination and review of requirements related to the product (7.2.1 and 7.2.2)',
            'determination_review_boolean' => '0 = No, 1 = YES',
            'design_development' => '	Design and development (7.3)',
            'design_development_boolean' => '0 = No, 1 = YES',
            'purchase_outsource' => '	Purchasing and outsourcing (7.4)',
            'purchase_outsource_boolean' => '0 = No, 1 = YES',
            'production_control' => 'Control of production and service provision and its validation (7.5.1 and 7.5.2)',
            'production_control_boolean' => '0 = No, 1 = YES',
            'identification' => '	Identification and traceability, preservation of product and customer property (7.5.3, 7.5.5 and 7.5.4)',
            'identification_boolean' => '0 = No, 1 = YES',
            'monitoring_control' => 'Control of monitoring and measuring equipment (7.6)',
            'monitoring_control_boolean' => '0 = No, 1 = YES',
            'measurement_monitoring' => 'Monitoring and measurement of processes and product, control of nonconforming product (8.2.3, 8.2.4 and 8.3)',
            'measurement_monitoring_boolean' => '0 = No, 1 = YES',
            'internal_audits' => 'Internal audits, analysis of data (8.2.2 a 8.4)',
            'internal_audits_boolean' => '0 = No, 1 = YES',
            'continueal_improovement' => 'Continual improvement, corrective and preventive action (8.5.1, 8.5.2 and 8.5.3)',
            'continueal_improovement_boolean' => '0 = No, 1 = YES',
            'strengths_of_the_company' => 'Strengths Of The Company',
        ];
    }
}
