<?php

use app\helpers\AppHelper;
use yii\helpers\Html;


?>
<div class="animated bounceInRight create-po document-form" id="<?= $i ?>">
    <div class="row">


        <div class="col-md-4">
            <label for="purchasereceipt-product_id-<?= $i ?>"> Product </label>
            <?=
            Html::activeDropDownList($model, 'product_id[]', AppHelper::getRawMaterials(), [
                'class' => 'form-control select4',
                'prompt' => 'Please Select',
                'id' => 'purchasereceipt-product_id-' . $i,
                'required' => true

            ]);
            ?>

        </div>



        <div class="col-md-4">
            <label for="purchasereceipt-unit-<?= $i ?>"> Unit </label>



            <div class="input-group">
                <?=
                Html::activeDropDownList($model, 'unit[]', AppHelper::GetUnitList(), [
                    'class' => 'form-control select4 unitdd',
                    'prompt' => 'Please Select',
                    'id' => 'purchasereceipt-unit-' . $i,
                    'required' => true

                ]);
                ?>

                <span class="input-group-btn">
              <button class="btn btn-success add-new" type="button"><i class="fa fa-plus"></i></button>
              </span>
            </div>

        </div>

        <div class="col-md-4">
            <label for="purchasereceipt-receive_qty-<?= $i ?>"> Receive Quantity </label>
            <?= Html::activeTextInput($model, 'receive_qty[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'purchasereceipt-receive_qty-' . $i,
                'required' => true,
                'type' => 'number'

            ]);
            ?>

        </div>


        <div class="col-md-4">
            <label for="purchasereceipt-rejected_qty-<?= $i ?>"> Rejected Quantity </label>
            <?= Html::activeTextInput($model, 'rejected_qty[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'purchasereceipt-rejected_qty-' . $i,
                'required' => true,
                'type' => 'number',
                'onchange' => 'rejectHandler(this)'

            ]);
            ?>

        </div>

        <div class="col-md-4">
            <label for="purchasereceipt-accepted_qty-<?= $i ?>"> Accepted Quantity </label>
            <?= Html::activeTextInput($model, 'accepted_qty[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'purchasereceipt-accepted_qty-' . $i,
                'required' => true,
                'type' => 'number'

            ]);
            ?>

        </div>


        <div class="col-md-4">
            <label for="purchasereceipt-unit_price-<?= $i ?>"> Unit Price </label>
            <?= Html::activeTextInput($model, 'unit_price[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'purchasereceipt-unit_price-' . $i,
                'required' => true,
                'step'=>'0.01',
                'type' => 'number'

            ]);
            ?>

        </div>

        <div class="col-md-4">
            <label for="purchasereceipt-order_no-<?= $i ?>"> Order No. </label>
            <?= Html::activeTextInput($model, 'order_no[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'purchasereceipt-order_no-' . $i,
                'required' => true,

            ]);
            ?>
        </div>

        <div class="col-md-4">
            <label for="is-inter-state-<?= $i ?>"> Is Inter State Purchase? </label>
            <?= Html::activeDropDownList($model,'isInterState[]', [0 => 'YES', 1 => 'NO'], [
                'maxlength' => true,
                'prompt' => 'Please Select',
                'class' => 'form-control',
                'id' => 'is-inter-state-' . $i,
                'required' => true,


            ]);
            ?>
        </div>

        <div class="col-md-4">
            <label for="purchasereceipt-gst-<?= $i ?>"> GST (%) &nbsp;&nbsp; &nbsp; &nbsp; <span id="cgst-<?= $i ?>"></span>  <span id="sgst-<?= $i ?>"></span> <span id="igst-<?= $i ?>"></span> </label>
            <?= Html::activeTextInput($model, 'gst[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'purchasereceipt-gst-' . $i,
                'required' => true,
                'type' => 'number',
                'step'=>'0.01',
                'onblur' => 'gstHandler(this)',

            ]);
            ?>
        </div>

        <div class="col-md-4">
            <label for="purchasereceipt-total_amount-<?= $i ?>"> Total Amount </label>
            <?= Html::activeTextInput($model, 'total_amount[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'purchasereceipt-total_amount-' . $i,
                'required' => true,
                'type' => 'number',
                'step'=>'0.01'

            ]);
            ?>
        </div>

        <div class="col-md-4">
            <label for="purchasereceipt-remark-<?= $i ?>"> Remark </label>
            <?= Html::activeTextarea($model, 'remark[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'purchasereceipt-remark-' . $i,

            ]);
            ?>
        </div>

        <?= Html::activeHiddenInput($model, 'cgst[]', [
            'maxlength' => true,
            'class' => 'form-control',
            'id' => 'purchasereceipt-cgst-' . $i,


        ]);
        ?>

        <?= Html::activeHiddenInput($model, 'sgst[]', [
            'maxlength' => true,
            'class' => 'form-control',
            'id' => 'purchasereceipt-sgst-' . $i,



        ]);
        ?>

        <?= Html::activeHiddenInput($model, 'igst[]', [
            'maxlength' => true,
            'class' => 'form-control',
            'id' => 'purchasereceipt-igst-' . $i,


        ]);
        ?>


        <div class="col-md-4">
            <br>
            <button class="btn btn-danger" onclick="ajaxform.removeBlankFloatForm('<?php echo $i ?>')">Remove</button>
        </div>


    </div>

    <?php
    /*$this->registerJs("$('.select4').select2({placeholder: 'Please Select',});", \yii\web\View::POS_END);*/
$this->registerJs("
$('.add-new').on('click',function(){                           
    $('#common-popup').modal().find('.modalContent').load('" . \yii\helpers\Url::to(['/units-of-measures/create'], true) . "');       
});"
, \yii\web\View::POS_END);
    ?>
