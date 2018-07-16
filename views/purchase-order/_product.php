<?php

use app\helpers\AppHelper;
use yii\helpers\Html;


?>
<div class="animated bounceInRight create-po document-form" id="<?= $i ?>">
    <div class="row">
        <div class="col-md-2">
            <label for="purchaseorder-product_id-<?= $i ?>"> Product </label>
            <?=
            Html::activeDropDownList($model, 'product_id[]', AppHelper::getRawMaterials(), [
                'class' => 'form-control select4 selected-param',
                'prompt' => 'Please Select',
                'id' => 'purchaseorder-product_id-' . $i,
                'required' => true

            ]);
            ?>

        </div>


        <div class="col-md-2">
            <label for="purchaseorder-qty-<?= $i ?>"> Quantity </label>
            <?= Html::activeTextInput($model, 'qty[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'purchaseorder-qty-' . $i,
                'required' => true,
                'type'=>'number'

            ]);
            ?>

        </div>
        <div class="col-md-2">
            <label for="purchaseorder-unit_price-<?= $i ?>"> Unit Price </label>
            <?= Html::activeTextInput($model, 'unit_price[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'purchaseorder-unit_price-' . $i,
                'required' => true,
                'type'=>'number',
               /* 'onblur'=>'addNewProduct()'*/

            ]);
            ?>

        </div>

        <div class="col-md-2">
            <label for="purchaseorder-vendor_id-<?= $i ?>"> Vendor </label>
            <?=
            Html::activeDropDownList($model, 'vendor_id[]', AppHelper::getVendors(), [
                'class' => 'form-control select4 vendor',
                'prompt' => 'Please Select',
                'id' => 'purchaseorder-vendor_id-' . $i,
                'required' => true,
                'onchange'=>'gstStateHandler(this)'
            ]);
            ?>
        </div>


        <div class="col-md-2">
            <label for="purchaseorder-gst-<?= $i ?>"> GST </label>
            <?= Html::activeTextInput($model, 'gst[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'purchaseorder-gst-' . $i,
                'required' => true,
                'type'=>'number',
               /* 'onblur'=>'addNewProduct()'*/

            ]);
            ?>

        </div>



        <div class="col-md-2">
            <br>
            <button class="btn btn-danger" onclick="ajaxform.removeBlankFloatForm('<?php echo $i ?>')">Remove</button>
        </div>


    </div>
    <?php
    $this->registerJs("
        $('.selected-param').on('change',function(){
                var ID = $(this).attr('id');
                 let idArr = ID.split('-');
                 let elementIndex = idArr[2];   
                 console.log(ID);              
                 console.log(elementIndex);              
                $.ajax(
                {
                    type: 'GET',
                    url: 'get-product-details',
                    data: {
                        'id': $(this).val()
                    },
                    success: function (res)
                    {
                        console.log(res);                 
                    }
                });
        });
    ", \yii\web\View::POS_END);
    ?>
