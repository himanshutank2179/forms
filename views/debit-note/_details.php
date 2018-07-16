<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\helpers\Url;


?>
<div class="animated bounceInRight create-po document-form" id="<?= $i ?>">


    <div class="row">

        <div class="col-md-2">
            <label for="debitnotedetails-product_id-<?= $i ?>"> Product </label>
            <?=
            Html::activeDropDownList($model, 'product_id[]', AppHelper::getAllProducts(), [
                'class' => 'form-control select4',
                'prompt' => 'Please Select',
                'id' => 'debitnotedetails-product_id-' . $i,
                /*'required' => true*/
            ]);
            ?>

        </div>


        <div class="col-md-2">
            <label for="debitnotedetails-qty-<?= $i ?>"> Quantity </label>

            <?= Html::activeTextInput($model, 'qty[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'debitnotedetails-qty-' . $i,
                'onblur' => 'qtyamountHandler(this)'
                /*'required' => true,*/

            ]);
            ?>
        </div>

        <div class="col-md-2">
            <label for="debitnotedetails-uom-<?= $i ?>"> UOM </label>

            <?= Html::activeTextInput($model, 'uom[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'debitnotedetails-uom-' . $i,
                /*'required' => true,*/

            ]);
            ?>
        </div>

        <div class="col-md-2">
            <label for="debitnotedetails-rate-<?= $i ?>"> Rate </label>

            <?= Html::activeTextInput($model, 'rate[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'debitnotedetails-rate-' . $i,
                'onblur' => 'amountHandler(this)'
                /*'required' => true,*/


            ]);
            ?>
        </div>

        <div class="col-md-2">
            <label for="debitnotedetails-amount-<?= $i ?>"> Amount </label>

            <?= Html::activeTextInput($model, 'amount[]', [
                'maxlength' => true,
                'class' => 'form-control amount',
                'id' => 'debitnotedetails-amount-' . $i,
                'value' => 0,
                'type' => 'number',
                'step' => '0.01'
                /*'required' => true,*/

            ]);
            ?>
        </div>
        <div class="col-md-1">
            <br>
            <button class="btn btn-danger" type="button"
                    onclick="ajaxform.removeBlankFloatForm('<?php echo $i ?>'); totalHandler();">
                Remove
            </button>
        </div>


    </div>
    <?php

    $this->registerJs("
  
", \yii\web\View::POS_END);
    ?>

