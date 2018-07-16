<?php

use app\helpers\AppHelper;
use yii\helpers\Html;


?>
<div class="animated bounceInRight create-po document-form" id="<?= $i ?>">
    <div class="row">


        <div class="col-md-4">
            <label for="billofmaterial-raw_materia_id-<?= $i ?>"> Raw Material </label>
            <?=
            Html::activeDropDownList($model, 'raw_materia_id[]', AppHelper::getRawMaterials(), [
                'class' => 'form-control select4',
                'prompt' => 'Please Select',
                'id' => 'billofmaterial-raw_materia_id-' . $i,
                'required' => true

            ]);
            ?>

        </div>


        <div class="col-md-4">
            <label for="billofmaterial-unit_id-<?= $i ?>"> Unit </label>



            <div class="input-group">
                <?=
                Html::activeDropDownList($model, 'unit_id[]', AppHelper::GetUnitList(), [
                    'class' => 'form-control select4 unitdd',
                    'prompt' => 'Please Select',
                    'id' => 'billofmaterial-unit_id-' . $i,
                    'required' => true

                ]);
                ?>

                <span class="input-group-btn">
              <button class="btn btn-success add-new" type="button"><i class="fa fa-plus"></i></button>
              </span>
            </div>

        </div>

        <div class="col-md-4">
            <label for="billofmaterial-document_id-<?= $i ?>"> Document </label>


            <?=
            Html::activeDropDownList($model, 'document_id[]', AppHelper::getAllDocuments(), [
                'class' => 'form-control select4',
                'prompt' => 'Please Select',
                'id' => 'billofmaterial-document_id-' . $i,
                'required' => true

            ]);
            ?>

        </div>

        <div class="col-md-4">
            <label for="billofmaterial-procuring_by-<?= $i ?>"> Procuring By </label>


            <?=
            Html::activeDropDownList($model, 'procuring_by[]', ['ready_to_purchase' => 'Ready to Purchase', 'casting' => 'Casting', 'fabrication' => 'Fabrication', 'assembling' => 'Assembling'], [
                'class' => 'form-control select4',
                'prompt' => 'Please Select',
                'id' => 'billofmaterial-procuring_by-' . $i,
                'required' => true

            ]);
            ?>

        </div>

        <div class="col-md-4">
            <label for="billofmaterial-perameters-<?= $i ?>"> Perameters </label>


            <?=
            Html::activeDropDownList($model, 'perameters[]', AppHelper::getParameters(), [
                'class' => 'form-control select4 selected-param',
                'prompt' => 'Please Select',
                'id' => 'billofmaterial-perameters-' . $i,
                'required' => true

            ]);
            ?>

        </div>

        <div class="col-md-3">
            <label for="billofmaterial-qty-<?= $i ?>"> Quantity </label>
            <?= Html::activeTextInput($model, 'qty[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'billofmaterial-qty-' . $i,
                'required' => true,
                'type' => 'number'

            ]);
            ?>

        </div>

        <div class="col-md-1">
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
                $.ajax(
                {
                    type: 'GET',
                    url: 'get-parameter-details',
                    data: {
                        'id': $(this).val()
                    },
                    success: function (res)
                    {
                        $('#billofmaterial-qty-' + elementIndex).val(res.value);                        
                    }
                });
        });
    ", \yii\web\View::POS_END);
    ?>
<?php
$this->registerJs("
$('.add-new').on('click',function(){                           
    $('#common-popup').modal().find('.modalContent').load('" . \yii\helpers\Url::to(['/units-of-measures/create'], true) . "');       
});"
    , \yii\web\View::POS_END);
?>

