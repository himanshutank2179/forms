<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 7/16/2018
 * Time: 3:18 PM
 */
use app\models\CompanyAuditPlan;

?>
<table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">
<!--    <tr>-->
<!--        <td style=" border: 1px solid black; width: 10%;">&nbsp;</td>-->
<!--        <td style=" border: 1px solid black; width: 10%;">&nbsp;</td>-->
<!--        <td style=" border: 1px solid black; width: 10%;">&nbsp;</td>-->
<!--        <td style=" border: 1px solid black; width: 10%;">&nbsp;</td>-->
<!--        <td style=" border: 1px solid black; width: 10%;">&nbsp;</td>-->
<!--        <td style=" border: 1px solid black; width: 10%;">&nbsp;</td>-->
<!--        <td style=" border: 1px solid black; width: 10%;">&nbsp;</td>-->
<!--        <td style=" border: 1px solid black; width: 10%;">&nbsp;</td>-->
<!--        <td style=" border: 1px solid black; width: 10%;">&nbsp;</td>-->
<!--        <td style=" border: 1px solid black; width: 10%;">&nbsp;</td>-->
<!--    </tr>-->
    <tr>
<!--        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">-->
<!--            <img src="--><?//= Yii::$app->urlManager->createAbsoluteUrl('uploads/'. Yii::$app->session->get('company')->image) ?><!--" alt="image"  height="42" width="42">-->
<!--        </td>-->
        <td colspan="10" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;"><h2><center>Company Audit Plan Details</center></h2></td>
    </tr>
    <tr>
        <td colspan="10" style=" border: 1px solid black; padding: 5px 5px 5px 5px;margin: 0px 0px 0px 0px;"><h4><b>Audit Plan</b></h4></td>
    </tr>
    <tr>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Audit Plan Dates</b></p>
        </td>
        <td colspan="2" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Audit First Dates</b></p>
        </td>
        <td colspan="2" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Audit Last Dates</b></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Remark</b></p>
        </td>
    </tr>
    <tr>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditplan->audit_plan_date) ?></p>
        </td>
        <td colspan="2" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditplan->audit_first_date) ?></p>
        </td>
        <td colspan="2" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditplan->audit_last_date) ?></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditplan->remark) ?></p>
        </td>
    </tr>

    <!-- Standard -->
    <?php
    $audit = \app\models\AuditPlanStandard::find()->where(['company_id'=>$auditplan->company_id])->all();
    ?>
    <?php foreach ($audit as $key => $auditplan): ?>
        <tr>
            <td colspan="10" style=" border: 1px solid black; padding: 5px 5px 5px 5px;margin: 0px 0px 0px 0px;"><h4><b>Standard</b></h4></td>
        </tr>
    <tr>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Standard Doc Record Management</b></p>
        </td>
        <td colspan="7" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditplan->standard_doc_record_management) ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Standard Quality Policy</b></p>
        </td>
        <td colspan="7" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>&nbsp;<?= getExactField($auditplan->standard_quality_policy) ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Standard Responsibility</b></p>
        </td>
        <td colspan="7" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>&nbsp;<?= getExactField($auditplan->standard_responsibility) ?></p>
        </td>
    </tr>

    <tr>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Standard Planning And Determination</b></p>
        </td>
        <td colspan="7" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditplan->standard_planning_and_determination) ?>&nbsp;</p>
        </td>
    </tr>

    <tr>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Standard Production Control</b></p>
        </td>
        <td colspan="7" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditplan->standard_production_control) ?></p>
        </td>
    </tr>

    <tr>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Standard Monitoring</b></p>
        </td>
        <td colspan="7" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditplan->standard_monitoring) ?></p>
        </td>
    </tr>
    <?php endforeach; ?>
    <!-- Elements -->
    <tr>
        <td colspan="10" style=" border: 1px solid black; padding: 5px 5px 5px 5px;margin: 0px 0px 0px 0px;"><h4><b>Elemets</b></h4></td>
    </tr>
    <tr>
        <td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Elemets</b></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Values</b></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Checked</b></p>
        </td>
    </tr>

    <?php
    $element = \app\models\AuditElements::find()->where(['company_id'=>$auditplan->company_id])->all();
    ?>
    <?php foreach ($element as $key => $auditelement): ?>
    <tr>
        <td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Design and development application (7.3)</p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditelement->design_dev) ?></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getBoolean($auditelement->design_dev_boolean) ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Quality manual and control of documents (4.2.2 and 4.2.3)</p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditelement->quality_man) ?></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getBoolean($auditelement->quality_man_boolean) ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Control of records (4.2.4)</p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditelement->rec_control) ?></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getBoolean($auditelement->rec_control_boolean) ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Management commitment (5.1)</p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditelement->management_commitment) ?></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getBoolean($auditelement->management_commitment_boolean) ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Customer focus, communication and satisfaction (5.2, 7.2.3 and 8.2.1)</p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditelement->customer_focus) ?></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getBoolean($auditelement->customer_focus_boolean) ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Quality policy (5.3)	</p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditelement->quality_policy) ?></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <?= getBoolean($auditelement->quality_policy_boolean) ?>
        </td>
    </tr>
    <tr>
        <td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Quality objectives and quality management system planning (5.4)</p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditelement->quality_objectives) ?></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getBoolean($auditelement->quality_objectives_boolean) ?></p>
        </td>
    </tr>

    <tr>
        <td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Responsability and authority, management representative and internal communication (5.5)</p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditelement->respo_autho) ?></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getBoolean($auditelement->respo_autho_boolean) ?></p>
        </td>
    </tr><tr>
        <td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Management system review (5.6)</p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditelement->management_system) ?></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getBoolean($auditelement->management_system_boolean) ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Human resources (6.2)</p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditelement->hr) ?></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getBoolean($auditelement->hr_boolean) ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Infrastructure and work environment (6.3 a 6.4)</p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditelement->infratructure) ?></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getBoolean($auditelement->infratructure_boolean) ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Planning of product realization (7.1)</p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditelement->product_planning) ?></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getBoolean($auditelement->product_planning_boolean) ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Determination and review of requirements related to the product (7.2.1 and 7.2.2)</p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditelement->determination_review) ?></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getBoolean($auditelement->determination_review_boolean) ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Design and development (7.3)</p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditelement->design_development) ?></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getBoolean($auditelement->design_development_boolean) ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Purchasing and outsourcing (7.4)</p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditelement->purchase_outsource) ?></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getBoolean($auditelement->purchase_outsource_boolean) ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Control of production and service provision and its validation (7.5.1 and 7.5.2)</p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditelement->production_control) ?></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getBoolean($auditelement->production_control_boolean) ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Identification and traceability, preservation of product and customer property (7.5.3, 7.5.5 and 7.5.4)</p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditelement->identification) ?></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getBoolean($auditelement->identification_boolean) ?></p>
        </td>
    </tr><tr>
        <td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Control of monitoring and measuring equipment (7.6)</p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditelement->monitoring_control) ?></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getBoolean($auditelement->monitoring_control_boolean) ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Monitoring and measurement of processes and product, control of nonconforming product (8.2.3, 8.2.4 and 8.3)</p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditelement->measurement_monitoring) ?></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getBoolean($auditelement->measurement_monitoring_boolean) ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Internal audits, analysis of data (8.2.2 a 8.4)</p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditelement->internal_audits) ?></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getBoolean($auditelement->internal_audits_boolean) ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Continual improvement, corrective and preventive action (8.5.1, 8.5.2 and 8.5.3)</p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditelement->continueal_improovement) ?></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getBoolean($auditelement->continueal_improovement_boolean) ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="2" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Strengths Of The Company</b></p>
        </td>
        <td colspan="8" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($auditelement->strengths_of_the_company) ?></p>
        </td>
    </tr>
    <?php endforeach; ?>
    <!-- Elements -->
    <tr>
        <td colspan="10" style=" border: 1px solid black; padding: 5px 5px 5px 5px;margin: 0px 0px 0px 0px;"><h4><b>Documents</b></h4></td>
    </tr>
    <tr>
        <td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Document Name</b></p>
        </td>
        <td colspan="2" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Document No</b></p>
        </td>
        <td colspan="4" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Reviewed</b></p>
        </td>
    </tr>

    <?php
    $doc = \app\models\AuditPlanDocuments::find()->where(['company_id'=>$auditplan->company_id])->all();
    ?>
    <?php foreach ($doc as $key => $docplan): ?>
    <tr>
        <td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($docplan->document_name) ?></p>
        </td>
        <td colspan="2" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($docplan->document_no) ?></p>
        </td>
        <td colspan="4" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getBoolean($docplan->reviewed) ?></p>
        </td>
    </tr>
    <?php endforeach; ?>

    <tr>
        <td colspan="10" style=" border: 1px solid black; padding: 5px 5px 5px 5px;margin: 0px 0px 0px 0px;"><h4><b>Non Conformities</b></h4></td>
    </tr>
    <tr>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Non Conformity</b></p>
        </td>
        <td colspan="4" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Description</b></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Non Conformity Class</b></p>
        </td>
    </tr>
    <?php
    $confirm = \app\models\AuditNonConfirmities::find()->where(['company_id'=>$auditplan->company_id])->all();
    ?>
    <?php foreach ($confirm as $key => $docplan): ?>
    <tr>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($docplan->design_dev) ?></p>
        </td>
        <td colspan="4" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($docplan->non_confirmitie) ?></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($docplan->non_confirming_class) ?></p>
        </td>
    </tr>
    <?php endforeach; ?>
</table>