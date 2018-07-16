<?php

use app\helpers\AppHelper;
use yii\helpers\Html;


?>
<div class="animated bounceInRight create-po document-form" id="<?= $i ?>">
    <div class="row">


        <div class="col-md-2">
            <label for="jobcard-raw-materials-item_name-<?= $i ?>"> Item </label>
            <?=
            Html::activeDropDownList($model, 'item_name[]', AppHelper::getRawMaterials(), [
                'class' => 'form-control select4',
                'prompt' => 'Please Select',
                'id' => 'jobcard-raw-materials-item_name-' . $i,
                'required' => true

            ]);
            ?>
        </div>

        <div class="col-md-2">
            <label for="jobcard-raw-materials-qty-<?= $i ?>"> Quantity </label>
            <?= Html::activeTextInput($model, 'qty[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'jobcard-raw-materials-qty-' . $i,
            ]);
            ?>

        </div>

        <div class="col-md-2">
            <label for="jobcard-raw-materials-heat_no-<?= $i ?>"> Heat No. / LOT No. / TC No. </label>
            <?= Html::activeTextInput($model, 'heat_no[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'jobcard-raw-materials-heat_no-' . $i,
                'type' => 'number'
            ]);
            ?>

        </div>

        <div class="col-md-1">
            <br>
            <button class="btn btn-danger" onclick="ajaxform.removeBlankFloatForm('<?php echo $i ?>')">Remove</button>
        </div>

    </div>

