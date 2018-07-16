<?php

use app\helpers\AppHelper;
use yii\helpers\Html;


?>
<div class="animated bounceInRight create-po document-form" id="<?= $i ?>">


    <div class="row">


        <div class="col-md-7">
            <label for="audit-plan-documents-document_name-<?= $i ?>"> Document Name </label>

            <?= Html::activeTextInput($auditPlanDocuments, 'document_name[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'audit-plan-documents-document_name-' . $i,

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

                'required' => true,
            ]);
            ?>
        </div>

        <div class="col-md-1">
            <label for="audit-plan-documents-document_no-<?= $i ?>"> Reviewed </label> <br>

            <?=
            Html::activeDropDownList($auditPlanDocuments, 'reviewed[]', [1 => 'YES', 0 => 'NO'], [
                'class' => 'form-control select4',
                'prompt' => 'Please Select',
                'id' => 'audit-plan-documents-reviewed-' . $i,
                /*'required' => true*/

            ]);
            ?>
        </div>


        <div class="col-md-1">
            <br>
            <button type="button" class="btn btn-danger" onclick="ajaxform.removeBlankFloatForm('<?php echo $i ?>')">
                Remove
            </button>
        </div>


    </div>


