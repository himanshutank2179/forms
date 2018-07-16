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
            <label for="work-order-product_id-<?= $i ?>"> Product </label>

            <?=
            Html::activeDropDownList($model, 'product_id[]', AppHelper::getRawMaterials(), [
                'class' => 'form-control select4',
                'prompt' => 'Please Select',
                'id' => 'work-order-product_id-' . $i,
                /*'onchange'=>'parameterHandler(this)',*/


                /*'required' => true*/

            ]);
            ?>

        </div>

        <div class="col-md-2">
            <label for="work-order-drawing_no-<?= $i ?>"> Drawing Number</label>

            <?= Html::activeTextInput($model, 'drawing_no[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'work-order-drawing_no-' . $i,
                /*'required' => true,*/


            ]);
            ?>
        </div>

        <div class="col-md-2">
            <label for="work-order-required_qty-<?= $i ?>"> Reuired Quantity</label>

            <?= Html::activeTextInput($model, 'required_qty[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'work-order-required_qty-' . $i,
                /*'required' => true,*/
            ]);
            ?>
        </div>

        <div class="col-md-2">
            <label for="work-order-delivery_required_at-<?= $i ?>"> Delivery Required At</label>

            <?= Html::activeTextInput($model, 'delivery_required_at[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'work-order-delivery_required_at-' . $i,
                /*'required' => true,*/
            ]);
            ?>
        </div>

        <div class="col-md-1">
            <label for="work-order-job_card_no-<?= $i ?>"> Job Card No </label>

            <?=
            Html::activeDropDownList($model, 'job_card_no[]', AppHelper::getJobCardNo(), [
                'class' => 'form-control select4',
                'prompt' => 'Please Select',
                'id' => 'work-order-job_card_no-' . $i,
                /*'onchange'=>'parameterHandler(this)',*/


                /*'required' => true*/

            ]);
            ?>

        </div>

        <div class="col-md-1">
            <label for="work-order-actual_qty-<?= $i ?>"> Actual Quantity </label>

            <?= Html::activeTextInput($model, 'actual_qty[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'work-order-actual_qty-' . $i,
                /*'required' => true,*/
            ]);
            ?>
        </div>

        <div class="col-md-2">
            <label for="work-order-pending-<?= $i ?>"> Pending </label>

            <?= Html::activeTextInput($model, 'pending[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'work-order-pending-' . $i,
                /*'required' => true,*/
            ]);
            ?>
        </div>


    </div>

    <br>
    <br>


    <button type="button" class=" btn btn-danger col-md-12" onclick="ajaxform.removeBlankFloatForm('<?php echo $i ?>')">
        Remove
    </button>
    <br><br>


