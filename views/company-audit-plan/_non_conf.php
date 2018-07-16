<?php

use app\helpers\AppHelper;
use yii\helpers\Html;


?>
<div class="animated bounceInRight create-po document-form" id="<?= $i ?>">


    <div class="row">


        <div class="col-md-6">
            <label for="audit-non-confirmities-design_dev-<?= $i ?>"> Non Conformity </label>

            <?=
            Html::activeDropDownList($auditNonConfirmities, 'design_dev[]', AppHelper::getNonConformity(), [
                'class' => 'form-control select4',
                'prompt' => 'Please Select',
                'id' => 'audit-non-confirmities-design_dev-' . $i,
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
                'required' => true,
                'label' => false
            ]);
            ?>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-6">
            <label for="audit-non-confirmities-non-confirming_class-<?= $i ?>"> Non Conformity </label>

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


