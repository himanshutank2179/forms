<?php
use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="animated bounceInRight create-po document-form" id="<?= $i ?>">
    <div class="row">

        <div class="col-md-2">
            <label for="order-conf-products-product_id-<?= $i ?>"> Product </label>
            <?= Html::activeDropDownList($model, 'product_id[]',AppHelper::getAllProducts(),['class' => 'form-control select4', 'required' => true, 'prompt' => 'Please Select','id'=> 'order-conf-products-product_id-'.$i,]) ?>
        </div>

        <div class="col-md-1">
            <label for="order-conf-products-quantity-<?= $i ?>">Quantity </label>
            <?= Html::activeTextInput($model, 'quantity[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'order-conf-products-quantity-' . $i,
                'required' => true,
                'type'=>'number'
            ]);
            ?>
        </div>

        <div class="col-md-1">
            <label for="order-conf-products-rate-<?= $i ?>"> Rate</label>
            <?= Html::activeTextInput($model, 'rate[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'order-conf-products-rate-' . $i,
                'required' => true,
                'type'=>'number'
            ]);
            ?>
        </div>

        <div class="col-md-1">
            <label for="order-conf-products-gst-<?= $i ?>">GST </label>
            <?= Html::activeTextInput($model, 'gst[]', [
                'maxlength' => true,
                'dataid' => $i,
                'class' => 'form-control',
                'id' => 'order-conf-products-gst-' . $i,
                'required' => true,
                'type'=>'number',
                'onblur' => 'gstcalculate(this)',
            ]);
            ?>
        </div>

        <div class="col-md-1">
            <label for="order-conf-products-sgst-<?= $i ?>"> SGST</label>
            <?= Html::activeTextInput($model, 'sgst[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'order-conf-products-sgst-' . $i,
                'required' => true,
                'type'=>'text',
                'readonly' => true,
            ]);
            ?>
        </div>

        <div class="col-md-1">
            <label for="order-conf-products-cgst-<?= $i ?>"> CGST</label>
            <?= Html::activeTextInput($model, 'cgst[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'order-conf-products-cgst-' . $i,
                'required' => true,
                'type'=>'text',
                'readonly' => true,
            ]);
            ?>
        </div>

        <div class="col-md-1">
            <label for="order-conf-products-igst-<?= $i ?>"> ISGT</label>
            <?= Html::activeTextInput($model, 'igst[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'order-conf-products-igst-' . $i,
                'required' => true,
                'type'=>'text',
                'readonly' => true,
            ]);
            ?>
        </div>

        <div class="col-md-1">
            <label for="order-conf-products-total_gst-<?= $i ?>">Total GST</label>
            <?= Html::activeTextInput($model, 'total_gst[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'order-conf-products-total_gst-' . $i,
                'required' => true,
                'type'=>'text',
                'readonly' => true,
            ]);
            ?>
        </div>

        <div class="col-md-2">
            <label for="order-conf-products-total_amount-<?= $i ?>"> Total Amount</label>
            <?= Html::activeTextInput($model, 'total_amount[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'order-conf-products-total_amount-' . $i,
                'required' => true,
                'type'=>'text',
                'readonly' => true,
            ]);
            ?>
        </div>

        <div class="col-md-1">
            <br>
            <button class="btn btn-danger" onclick="ajaxform.removeBlankFloatForm('<?php echo $i ?>')">Remove</button>
        </div>

    </div>
</div>