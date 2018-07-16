<?php

use app\helpers\AppHelper;
use yii\helpers\Html;


?>
<div class="animated bounceInRight create-po document-form" id="<?= $i ?>">


    <div class="row">

        <div class="col-md-2">
            <label for="jobcard-operation-parameter-parameter_id-<?= $i ?>"> Parameter </label>
            <?=
            Html::activeDropDownList($model, 'parameter_id[]', AppHelper::getParameters(), [
                'class' => 'form-control select4',
                'prompt' => 'Please Select',
                'id' => 'jobcard-operation-parameter-parameter_id-' . $i,
                'required' => true

            ]);
            ?>

        </div>

        <div class="col-md-2">
            <label for="jobcard-operation-parameter-unit-<?= $i ?>"> Unit </label>
            <?=
            Html::activeDropDownList($model, 'unit[]', AppHelper::getUnitsOfMeasures(), [
                'class' => 'form-control select4',
                'prompt' => 'Please Select',
                'id' => 'jobcard-operation-parameter-unit-' . $i,
                'required' => true
            ]);
            ?>

        </div>


        <div class="col-md-2">
            <label for="jobcard-operation-parameter-tolerance-<?= $i ?>"> Tolerance </label>


            <input type="text" class="form-control" readonly id="jobcard-operation-parameter-tolerance-<?= $i ?>">

        </div>

        <div class="col-md-1">
            <label for="jobcard-operation-parameter-instrument_id-<?= $i ?>"> Instrument </label>

            <?= Html::activeDropDownList($model, 'instrument_id[]', AppHelper::getInstruments(), [
                'class' => 'form-control select4',
                'prompt' => 'Please Select',
                'id' => 'jobcard-operation-parameter-instrument_id-' . $i,
                'required' => true

            ]); ?>

        </div>


        <div class="col-md-1">
            <label for="jobcard-operation-parameter-first_qc_result-<?= $i ?>"> 1st QC Result</label>

            <?= Html::activeTextInput($model, 'first_qc_result[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'jobcard-operation-parameter-first_qc_result-' . $i,
                'required' => true,
            ]);
            ?>
        </div>


        <div class="col-md-1">
            <label for="jobcard-operation-parameter-second_qc_result-<?= $i ?>"> 2nd QC Result</label>

            <?= Html::activeTextInput($model, 'second_qc_result[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'jobcard-operation-parameter-second_qc_result-' . $i,

                'required' => true,
            ]);
            ?>
        </div>

        <div class="col-md-1">
            <label for="jobcard-operation-parameter-third_qc_result-<?= $i ?>"> 3rd QC Result</label>

            <?= Html::activeTextInput($model, 'third_qc_result[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'jobcard-operation-parameter-third_qc_result-' . $i,

                'required' => true,
                'onblur' => 'calcAvg(this)',

            ]);
            ?>
        </div>


        <div class="col-md-2">
            <label for="jobcard-operation-parameter-averages-<?= $i ?>"> Averages </label>

            <?= Html::activeTextInput($model, 'averages[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'jobcard-operation-parameter-averages-' . $i,
                'readonly' => true,
                'required' => true,

            ]);
            ?>
        </div>


        <?= Html::activeHiddenInput($model, 'product_id[]', [
            'maxlength' => true,
            'class' => 'form-control',
            'id' => 'jobcard-operation-parameter-product_id-' . $i,

        ]);
        ?>


        <!--<div class="col-md-1">
            <br>
            <button class="btn btn-danger" onclick="ajaxform.removeBlankFloatForm('<?php /*echo $i */ ?>')">Remove</button>
        </div>-->


    </div>
    <?php


    ?>

