<?php

use app\helpers\AppHelper;
use yii\helpers\Html;


?>
<div class="animated bounceInRight create-po document-form" id="<?= $i ?>">
    <div class="row">


        <div class="col-md-4">
            <label for="itqt-one-acceptance-criteria-name-<?= $i ?>"> Parameter Name </label>

            <?= Html::activeTextInput($model, 'name[]', [
                'maxlength' => true,
                'class' => 'form-control datepicker',
                'id' => 'itqt-one-acceptance-criteria-name' . $i,
            ]);
            ?>
        </div>

        <div class="col-md-4">
            <label for="itqt-one-acceptance-criteria-value-<?= $i ?>"> Value </label>

            <?= Html::activeTextInput($model, 'value[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'itqt-one-acceptance-criteria-value' . $i,
                /*'onblur'=>'addNewItem()'*/
            ]);
            ?>
        </div>


        <div class="col-md-4">
            <br>
            <button class="btn btn-danger" onclick="ajaxform.removeBlankFloatForm('<?php echo $i ?>')">Remove</button>
        </div>

    </div>




