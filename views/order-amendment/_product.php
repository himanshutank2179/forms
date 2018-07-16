<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\helpers\Url;


?>
<div class="animated bounceInRight create-po document-form" id="<?= $i ?>">

    <span id="isvalid<?= $i ?>"></span>

    <span id="is_height_valid<?= $i ?>"></span>

    <hr>

    <div class="row">

        <div class="col-md-2">
            <label for="order-amendment-product_id-<?= $i ?>"> Product </label>

            <?=
            Html::activeDropDownList($model, 'product_id[]', AppHelper::getRawMaterials(), [
                'class' => 'form-control select4',
                'prompt' => 'Please Select',
                'id' => 'order-amendment-product_id-' . $i,
                /*'onchange'=>'parameterHandler(this)',*/
                'required' => true,

            ]);
            ?>

        </div>


        <div class="col-md-2">
            <label for="order-amendment-reviced_desc-<?= $i ?>"> Revised Description </label>

            <?= Html::activeTextarea($model, 'reviced_desc[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'order-amendment-reviced_desc-' . $i,
                /*'required' => true,*/


            ]);
            ?>
        </div>

        <div class="col-md-2">
            <label for="order-amendment-quantity-<?= $i ?>"> Quantity </label>

            <?= Html::activeTextInput($model, 'quantity[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'order-amendment-quantity-' . $i,
                'onblur' => 'qtyamountHandler(this)',
                'required' => true,


            ]);
            ?>
        </div>

        <div class="col-md-2">
            <label for="order-amendment-rate_per_unit-<?= $i ?>"> Rate Per Unit </label>

            <?= Html::activeTextInput($model, 'rate_per_unit[]', [
                'maxlength' => true,
                'class' => 'form-control datepicker',
                'id' => 'order-amendment-rate_per_unit-' . $i,
                'onblur' => 'amountHandler(this)',
                'required' => true,


            ]);
            ?>
        </div>

        <div class="col-md-2">
            <label for="order-amendment-total_amount-<?= $i ?>"> Total Amount </label>

            <?= Html::activeTextInput($model, 'total_amount[]', [
                'maxlength' => true,
                'class' => 'form-control amount',
                'id' => 'order-amendment-total_amount-' . $i,
                'value' => 0,
                'type' => 'number',
                'step' => '0.01',
                'readonly' => true,
                /*'required' => true,*/


            ]);
            ?>
        </div>
        <div class="col-md-1">
            <br>
            <button type="button" class=" btn btn-danger col-md-12" onclick="ajaxform.removeBlankFloatForm('<?php echo $i ?>')">
        Remove
    </button>
        </div>




    </div>



    <!-- <button type="button" class=" btn btn-danger col-md-12" onclick="ajaxform.removeBlankFloatForm('<?php echo $i ?>')">
        Remove
    </button>
    <br><br> -->


