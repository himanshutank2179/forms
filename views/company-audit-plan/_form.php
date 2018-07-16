<?php

use app\helpers\AppHelper;
use app\models\AuditNonConfirmities;
use app\models\AuditPlanDocuments;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CompanyAuditPlan */
/* @var $form yii\widgets\ActiveForm */
$auditPlans = AuditPlanDocuments::find()->where(['company_id' => Yii::$app->session->get('company')->company_id])->all();


//debugPrint($nonConf);

?>
<style>
    .pbtn {
        width: 100%;
        text-align: left;
        margin: 30px 0 0 0;
    }
</style>

<div class="company-audit-plan-form">


    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#audit_dates">AUDIT DATES</a></li>
        <li><a data-toggle="tab" href="#standard">STANDARD</a></li>
        <li><a data-toggle="tab" href="#elements">ELEMENTS</a></li>
        <li><a data-toggle="tab" href="#documents">DOCUMENTS</a></li>
        <li><a data-toggle="tab" href="#non-conf">NON_CONFORMITIES</a></li>
        <li><a data-toggle="tab" href="#print">PRINT</a></li>
    </ul>

    <div class="tab-content">
        <div id="audit_dates" class="tab-pane fade in active">
            <h3>Audit Dates</h3>
            <hr>

            <?php $form = ActiveForm::begin(['id' => 'company-audit-plan', 'options' => ['method' => 'post']]); ?>

            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'audit_plan_date')->textInput(['class' => 'datepicker form-control']) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'audit_first_date')->textInput(['class' => 'datepicker form-control']) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'audit_last_date')->textInput(['class' => 'datepicker form-control']) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'remark')->textarea(['rows' => 6]) ?>


                </div>
            </div>
            <?= $form->field($model, 'company_id')->hiddenInput(['value' => Yii::$app->session->get('company')->company_id])->label(false) ?>


            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
        <div id="standard" class="tab-pane fade">

            <?php $form = ActiveForm::begin(['id' => 'audit-standard', 'options' => ['method' => 'post']]); ?>

            <div class="row">
                <div class="col-md-8">

                    <?= $form->field($auditPlanStandards, 'standard_doc_record_management')->textarea([
                        'rows' => 6,
                        'value' => empty($auditPlanStandards->standard_doc_record_management) ?
                            '#as per Master list of Mgt system MSL F/7.5/01 -39 documents for ISO 9001, 17  Nos of ISO 14001 and 18 Nos OHSAS systems available and in current use.
#Documents control found effective and in audit documents are found it at place  of working.' : $auditPlanStandards->standard_doc_record_management
                    ]) ?>

                    <?= $form->field($auditPlanStandards, 'standard_quality_policy')->textarea(['rows' => 6,
                        'value' => empty($auditPlanStandards->standard_quality_policy) ?
                            'QM:5.1 rev 2.0 1-04-2018 IMS policy for EQHS system found effective and understood within the organization, customer commitment shown by Top mgt, communication Matrix establish QM:5.6 rev 2.0 what?,Why?,Which?to whom? and How method establishe-communication found effective' :
                            $auditPlanStandards->standard_quality_policy
                    ]) ?>

                    <?= $form->field($auditPlanStandards, 'standard_responsibility')->textarea(['rows' => 6,
                        'value' => empty($auditPlanStandards->standard_responsibility) ?
                            '#DPC-RAIC-01 rev 1.0 1-04-2018 established clear role, responsibility authority and consultation system established, Technical Manager to quality Manager, Shop Managers roles are defined - #DPC-RAIC-01 found effective.' :
                            $auditPlanStandards->standard_responsibility
                    ]) ?>

                    <?= $form->field($auditPlanStandards, 'standard_planning_and_determination')->textarea(['rows' => 6, 'value' => empty($auditPlanStandards->standard_planning_and_determination) ?
                        '#DFIPL has established Planning, Sales Design, Mfg Quality Testing and dispatch planning is established #E/QCD/01 -receiving material inspection plan, E/QCD/02 in process QC plan, Prod plan for May18 examined -23 are recliner has been planned to mfg on shop flr.-Planning and product quality control fond effective.' :
                        $auditPlanStandards->standard_planning_and_determination
                    ]) ?>

                    <?= $form->field($auditPlanStandards, 'standard_production_control')->textarea(['rows' => 6, 'value' =>
                        empty($auditPlanStandards->standard_production_control) ?
                            '#QP/Prd/01-control of Non confirming product and QP/Prd/02 -Production process its control and service provision, QF/Prd/03 NC product register checked 07  items are found NC during in process QC, CA has been initiated-production and validation found effective.' : $auditPlanStandards->standard_production_control
                    ]) ?>

                    <?= $form->field($auditPlanStandards, 'standard_monitoring')->textarea(['rows' => 6, 'value' => empty($auditPlanStandards->standard_monitoring) ?
                        '#Sales target V/s Achieve, Work order Planned V/s achieved, supplier evaluation, Customer satisfaction, product quality Pass V/s reject analysis has been don on monthly bases, CSI for current year 89.91%  ,during first IQA No major NC found, Minor 01 and two OFI  done process found effective.' : $auditPlanStandards->standard_monitoring]) ?>


                </div>
            </div>


            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
        <div id="elements" class="tab-pane fade">

            <div class="element-container" style="margin: 20px;">
                <?php $form = ActiveForm::begin(); ?>

                <div class="row">
                    <div class="col-md-8">
                        <?= Html::activeLabel($auditElements, 'design_dev') ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'design_dev')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'design_dev_boolean')->checkbox(['label' => false]); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <?= Html::activeLabel($auditElements, 'quality_man') ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'quality_man')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'quality_man_boolean')->checkbox(['label' => false]); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <?= Html::activeLabel($auditElements, 'rec_control') ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'rec_control')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'rec_control_boolean')->checkbox(['label' => false]); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <?= Html::activeLabel($auditElements, 'management_commitment') ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'management_commitment')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'management_commitment_boolean')->checkbox(['label' => false]); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <?= Html::activeLabel($auditElements, 'customer_focus') ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'customer_focus')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'customer_focus_boolean')->checkbox(['label' => false]); ?>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8">
                        <?= Html::activeLabel($auditElements, 'quality_policy') ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'quality_policy')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'quality_policy_boolean')->checkbox(['label' => false]); ?>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8">
                        <?= Html::activeLabel($auditElements, 'quality_objectives') ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'quality_objectives')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'quality_objectives_boolean')->checkbox(['label' => false]); ?>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8">
                        <?= Html::activeLabel($auditElements, 'respo_autho') ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'respo_autho')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'respo_autho_boolean')->checkbox(['label' => false]); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <?= Html::activeLabel($auditElements, 'management_system') ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'management_system')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'management_system_boolean')->checkbox(['label' => false]); ?>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8">
                        <?= Html::activeLabel($auditElements, 'hr') ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'hr')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'hr_boolean')->checkbox(['label' => false]); ?>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8">
                        <?= Html::activeLabel($auditElements, 'infratructure') ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'infratructure')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'infratructure_boolean')->checkbox(['label' => false]); ?>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8">
                        <?= Html::activeLabel($auditElements, 'product_planning') ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'product_planning')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'product_planning_boolean')->checkbox(['label' => false]); ?>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8">
                        <?= Html::activeLabel($auditElements, 'determination_review') ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'determination_review')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'determination_review_boolean')->checkbox(['label' => false]); ?>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8">
                        <?= Html::activeLabel($auditElements, 'design_development') ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'design_development')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'design_development_boolean')->checkbox(['label' => false]); ?>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8">
                        <?= Html::activeLabel($auditElements, 'purchase_outsource') ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'purchase_outsource')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'purchase_outsource_boolean')->checkbox(['label' => false]); ?>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8">
                        <?= Html::activeLabel($auditElements, 'production_control') ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'production_control')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'production_control_boolean')->checkbox(['label' => false]); ?>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8">
                        <?= Html::activeLabel($auditElements, 'identification') ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'identification')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'identification_boolean')->checkbox(['label' => false]); ?>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8">
                        <?= Html::activeLabel($auditElements, 'monitoring_control') ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'monitoring_control')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'monitoring_control_boolean')->checkbox(['label' => false]); ?>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8">
                        <?= Html::activeLabel($auditElements, 'measurement_monitoring') ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'measurement_monitoring')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'measurement_monitoring_boolean')->checkbox(['label' => false]); ?>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8">
                        <?= Html::activeLabel($auditElements, 'internal_audits') ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'internal_audits')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'internal_audits_boolean')->checkbox(['label' => false]); ?>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8">
                        <?= Html::activeLabel($auditElements, 'continueal_improovement') ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'continueal_improovement')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($auditElements, 'continueal_improovement_boolean')->checkbox(['label' => false]); ?>
                    </div>
                </div>


                <?= $form->field($auditElements, 'strengths_of_the_company')->textarea(['rows' => 6]) ?>


                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>

        </div>
        <div id="documents" class="tab-pane fade">
            <?php $form = ActiveForm::begin(['id' => 'audit-documents', 'options' => ['method' => 'post']]); ?>

            <br>
            <div class="row">
                <div class="col-md-12">

                    <?php if (!empty($auditPlans)): ?>

                        <?php foreach ($auditPlans as $document): ?>
                            <?php $i = rand(); ?>
                            <div class="new-form-container animated bounceInRight create-po"
                                 id="<?= $document->audit_plan_document_id ?>">

                                <div class="row">
                                    <div class="col-md-7">
                                        <label for="audit-plan-documents-document_name-<?= $i ?>"> Document
                                            Name </label>

                                        <?= Html::activeTextInput($auditPlanDocuments, 'document_name[]', [
                                            'maxlength' => true,
                                            'class' => 'form-control',
                                            'id' => 'audit-plan-documents-document_name-' . $i,
                                            'value' => $document->document_name,
                                            'required' => true,
                                        ]);
                                        ?>
                                    </div>


                                    <div class="col-md-3">
                                        <label for="audit-plan-documents-document_no-<?= $i ?>"> Document No </label>

                                        <?= Html::activeTextInput($auditPlanDocuments, 'document_no[]', [
                                            'maxlength' => true,
                                            'class' => 'form-control',
                                            'id' => 'audit-plan-documents-document_no-' . $i,
                                            'value' => $document->document_no,

                                            'required' => true,
                                        ]);
                                        ?>
                                    </div>

                                    <div class="col-md-1">
                                        <label for="audit-plan-documents-reviewed-<?= $i ?>"> Reviewed </label> <br>


                                        <?=
                                        Html::activeDropDownList($auditPlanDocuments, 'reviewed[]', [1 => 'YES', 0 => 'NO'], [
                                            'class' => 'form-control select4',
                                            'prompt' => 'Please Select',
                                            'value' => $document->reviewed,
                                            'id' => 'audit-plan-documents-reviewed-' . $i,
                                            /*'required' => true*/

                                        ]);
                                        ?>

                                    </div>


                                    <div class="col-md-1">
                                        <br>
                                        <button type="button" class="btn btn-danger"
                                                onclick="ajaxform.removeDbForm('<?= Url::to(['company-audit-plan/remove-db-form', 'id' => $document->audit_plan_document_id]) ?>','<?php echo $document->audit_plan_document_id ?>')">
                                            Remove
                                        </button>
                                    </div>
                                </div>


                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>


                </div>


            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="ajax-document"></div>
                </div>

            </div>

            <div class="col-md-12">
                <a id="add-product"
                   onclick="ajaxform.addFloatForm('<?= Url::to(['company-audit-plan/get-float-form'], true) ?>','ajax-document')"
                   href="javascript:;"
                   class="btn btn-info col-md-12">Add New Documents</a>
            </div>

            <br><br>
            <div class="row">
                <div class="col-md-12">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>
            </div>


            <?php ActiveForm::end(); ?>


        </div>
        <div id="non-conf" class="tab-pane fade">
            <?php $form = ActiveForm::begin(); ?>
            <div class="row">

                <div class="col-md-12">

                    <?php if (!empty($nonConf)): ?>
                        <?php foreach ($nonConf as $nc): ?>
                            <?php $i = rand(); ?>

                            <div class="animated bounceInRight create-po document-form" id="<?= $nc->audit_non_confirmities_id ?>">


                                <div class="row">


                                    <div class="col-md-6">
                                        <label for="audit-non-confirmities-design_dev-<?= $i ?>"> Non
                                            Conformity </label>

                                        <?=
                                        Html::activeDropDownList($auditNonConfirmities, 'design_dev[]', AppHelper::getNonConformity(), [
                                            'class' => 'form-control select4',
                                            'prompt' => 'Please Select',
                                            'id' => 'audit-non-confirmities-design_dev-' . $i,
                                            'value'=> getExactField($nc->design_dev)
                                            /*'required' => true*/

                                        ]);
                                        ?>
                                    </div>
                                    <div class="clearfix"></div>
                                    <br>

                                    <div class="col-md-6">

                                        <?= Html::activeTextarea($auditNonConfirmities, 'non_confirmitie[]', [
                                            'maxlength' => true,
                                            'class' => 'form-control',
                                            'id' => 'audit-non-confirmities-non_confirmitie-' . $i,
                                            'value'=> getExactField($nc->non_confirmitie),
                                            'required' => true,
                                            'label' => false
                                        ]);
                                        ?>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6">
                                        <label for="audit-non-confirmities-non-confirming_class-<?= $i ?>"> Non
                                            Conformity </label>

                                        <?=
                                        Html::activeDropDownList($auditNonConfirmities, 'non_confirming_class[]', [
                                            'Major nonconformity' => 'Major nonconformity',
                                            'Minor nonconformity' => 'Minor nonconformity',
                                            'Area for improvement' => 'Area for improvement'
                                        ],

                                            [
                                                'class' => 'form-control select4',
                                                'prompt' => 'Please Select',
                                                'id' => 'audit-non-confirmities-non-confirming_class-' . $i,
                                                'value'=> getExactField($nc->non_confirming_class),
                                                /*'required' => true*/

                                            ]);
                                        ?>
                                    </div>


                                    <div class="col-md-1">
                                        <br>
                                        <button type="button" class="btn btn-danger"
                                                onclick="ajaxform.removeNonConfForm('<?= Url::to(['company-audit-plan/remove-non-conf'], true) ?>','<?= $nc->audit_non_confirmities_id ?>')">
                                            Remove
                                        </button>
                                    </div>


                                </div>


                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

                <div class="col-md-12">
                    <div id="ajax-audit-nonconf"></div>
                </div>

                <div class="col-md-12">
                    <a id="add-product"
                       onclick="ajaxform.addFloatForm('<?= Url::to(['company-audit-plan/get-non-conf-float-form'], true) ?>','ajax-audit-nonconf')"
                       href="javascript:;"
                       class="btn btn-info col-md-12">Add New Documents</a>
                </div>


            </div>

            <br><br>

            <div class="row">
                <div class="col-md-12">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>
            </div>


            <?php ActiveForm::end(); ?>

        </div>

        <div id="print" class="tab-pane fade">

            <div class="pbtn">
                <button class="btn btn-primary btn-lg">Print <span class="glyphicon glyphicon-print"></span> </button>
            </div>

        </div>
    </div>


</div>

<?php
$this->registerJs("
    $('.datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd',        
        todayBtn: 'linked',
        todayHighlight: true});
", \yii\web\View::POS_END);


if (empty($auditPlans)) {
    /*foreach (AppHelper::GetAuditDocuments() as $document){
        $this->registerJs("
            setTimeout(function () {
                ajaxform.addFloatForm('" . Url::to(['incomming-qc/get-float-form'], true) . "','ajax-document');
                    setTimeout(()=>{
                        $('#incommingqc-product_id-' + index).val(product.product_id);
                        $('#incommingqc-qty-' + index).val(product.receive_qty);
                        $('#incommingqc-rejected_qty-' + index).val(product.rejected_qty);
                        $('#incommingqc-accepted_qty-' + index).val(product.accepted_qty);
                    },1000);
            }, 2000 * index);
        ", \yii\web\View::POS_END);
    }*/
}


$this->registerJs("     
//SUBMMITING COMMENTS FORM DATA USING AJAX     
         
         $('body').on('beforeSubmit', 'form', function (e) {
            e.preventDefault();
            var formComent = $(this);
            var formId = formComent.attr('id');
            
            if (formComent.find('.has-error').length) 
            {
                return false;
            }
            
            $.ajax({
            url    : $(this).attr('action'),
            type   : 'post',
            async:false,
            data   : formComent.serialize(),
            success: function (response) 
            {            
                console.log(response); 
                if(response == 1){
                    swal('Done', 'Your Data has been saved!', \"success\")
                }
                //$('#'+formId).trigger('reset');           
            },
            error  : function () 
            {
                console.log('internal server error');
            }
            });
            return false;
         });         

", \yii\web\View::POS_END);


?>
