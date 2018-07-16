<?php

use app\helpers\AppHelper;
use yii\helpers\Html;


?>
<div class="animated bounceInRight create-po document-form" id="<?= $i ?>">
    <div class="row">


        <div class="col-md-10">
            <label for="bom-parameter-parameter_id-<?= $i ?>"> Parameter </label>
            <?=
            Html::activeDropDownList($model, 'parameter_id[]', AppHelper::getParameters(), [
                'class' => 'form-control select4',
                'prompt' => 'Please Select',
                'id' => 'bom-parameter-parameter_id-' . $i,
                'required' => true

            ]);
            ?>
        </div>


        <div class="col-md-1">
            <br>
            <button class="btn btn-danger" onclick="ajaxform.removeBlankFloatForm('<?php echo $i ?>')">Remove</button>
        </div>

    </div>




