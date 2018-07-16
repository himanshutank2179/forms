<?php

use app\helpers\AppHelper;
use yii\helpers\Html;


?>
<div class="animated bounceInRight create-po document-form" id="<?= $i ?>">
    <div class="row">

        <div class="col-md-3">
            <label for="parameters-name-<?= $i ?>"> Parameter Name </label>
            <?= Html::activeTextInput($model, 'name[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'parameters-name-' . $i,
                'required' => true,
                'type' => 'text'
            ]);
            ?>
        </div>

        <div class="col-md-3">
            <label for="parameters-value-<?= $i ?>"> Parameter Value </label>
            <?= Html::activeTextInput($model, 'value[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'parameters-value-' . $i,
                'required' => true,
                'type' => 'text'
            ]);
            ?>
        </div>

        <div class="col-md-2">
            <label for="parameters-tolerance-<?= $i ?>"> Parameter Tolerance </label>
            <?= Html::activeTextInput($model, 'tolerance[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'parameters-tolerance-' . $i,
                'required' => true,
                'type' => 'text'
            ]);
            ?>
        </div>

        <div class="col-md-2">
            <label for="parameters-unit-<?= $i ?>"> Parameter Unit </label>
            <div class="input-group">
                <?= Html::activeDropDownList($model, 'unit[]', AppHelper::getUnitsOfMeasures(), ['class' => 'form-control select4 unit-change', 'prompt' => 'Please Select', 'required' => true]) ?>

                <span class="input-group-btn">
              <button class="btn btn-success add-new" type="button"><i class="fa fa-plus"></i></button>
              </span>
            </div>
        </div>

        <div class="col-md-1">
            <br>
            <button class="btn btn-danger" onclick="ajaxform.removeBlankFloatForm('<?php echo $i ?>')">Remove
            </button>
        </div>


    </div>
</div>


<?php
$this->registerJs("
$('.add-new').on('click',function(){                           
    $('#common-popup').modal().find('.modalContent').load('" . \yii\helpers\Url::to(['/units-of-measures/create'], true) . "');       
});"
    , \yii\web\View::POS_END);
?>

