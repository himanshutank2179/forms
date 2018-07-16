<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PurchaseInventory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="purchase-inventory-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'product_id')->textInput() ?>

            <?= $form->field($model, 'initial_qty')->textInput() ?>

            <?= $form->field($model, 'current_qty')->textInput() ?>

            <?= $form->field($model, 'unit_price')->textInput() ?>

            <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

        </div>
    </div>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
