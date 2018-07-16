<?php

use app\helpers\AppHelper;
use yii\helpers\Html;


?>
<div class="animated bounceInRight create-po document-form" id="<?= $i ?>">


    <div class="row">

        <div class="col-md-2">
            <label for="incomming-qc-parameters-parameter_id-<?= $i ?>"> Parameter </label>
            <?=
            Html::activeDropDownList($model, 'parameter_id[]', AppHelper::getParameters(), [
                'class' => 'form-control select4',
                'prompt' => 'Please Select',
                'id' => 'incomming-qc-parameters-parameter_id-' . $i,
                /*'required' => true*/

            ]);
            ?>

        </div>

        <div class="col-md-2">
            <label for="incomming-qc-parameters-unit-<?= $i ?>"> Unit </label>
            <?=
            Html::activeDropDownList($model, 'unit[]', AppHelper::getUnitsOfMeasures(), [
                'class' => 'form-control select4',
                'prompt' => 'Please Select',
                'id' => 'incomming-qc-parameters-unit-' . $i,
                /*'required' => true*/
            ]);
            ?>

        </div>

        <div class="col-md-2">
            <label for="incomming-qc-parameters-desire-value-<?= $i ?>"> Desire Value </label>

            <?= Html::textInput('desire_value[]', '', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'incomming-qc-parameters-desire-value-' . $i,
                'readonly' => true
                /*'required' => true,*/
            ]);
            ?>
        </div>

        <div class="col-md-2">
            <label for="incomming-qc-parameters-tolerance-<?= $i ?>"> Tolerance </label>

            <?= Html::textInput('tolerance[]', '', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'incomming-qc-parameters-tolerance-' . $i,
                'readonly' => true
                /*'required' => true,*/
            ]);
            ?>
        </div>

        <div class="col-md-2">
            <label for="incomming-qc-parameters-actual-<?= $i ?>"> Actual </label>

            <?= Html::activeTextInput($model, 'actual[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'incomming-qc-parameters-actual-' . $i,
                'onblur'=>'paramVerifyHandler(this)'
            ]);
            ?>
        </div>


        <div class="col-md-2">
            <label for="incomming-qc-parameters-observation-<?= $i ?>"> Observation </label>

            <?= Html::activeTextInput($model, 'observation[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'incomming-qc-parameters-observation-' . $i,
                /*'required' => true,*/


            ]);
            ?>
        </div>


        <!--<div class="col-md-1">
            <br>
            <button class="btn btn-danger" onclick="ajaxform.removeBlankFloatForm('<?php /*echo $i */ ?>')">Remove</button>
        </div>-->


    </div>
    <?php


?>

