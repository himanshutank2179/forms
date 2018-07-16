<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItqtOnePlanner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="itqt-one-planner-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'product_id')->dropDownList(AppHelper::getRawMaterials(), ['class' => 'form-control select4', 'prompt' => 'Please Select','onchange' => 'productChange(this)']) ?>

            <?php //$form->field($model, 'parameter')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'sampling_plan')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'record')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'resposi_ability')->textInput(['maxlength' => true]) ?>
        </div>
    </div>



    <div class="float-window-container">
        <h3>Acceptance Criteria</h3>

        <div class="row">

            <div id="ajax-document"></div>


        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <a id="add-product"
                   onclick="ajaxform.addFloatForm('<?= Url::to(['itqt-one-planner/get-float-form'], true) ?>','ajax-document')"
                   href="javascript:;"
                   class="btn btn-info col-md-12">Add More Items</a>
            </div>

        </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
/*$this->registerJs("ajaxform.addFloatForm('" . Url::to(['itqt-one-planner/get-float-form'], true) . "','ajax-document');", \yii\web\View::POS_END);*/

/*$this->registerJs("function addNewItem(){ajaxform.addFloatForm('" . Url::to(['itqt-one-planner/get-float-form'], true) . "','ajax-document');}", \yii\web\View::POS_END);*/


$this->registerJs("

    function productChange(element){
    $('#ajax-document').empty();
    
     var val = $(element).val();
      $.ajax({
            type: 'GET',
            url: 'get-product-params',            
            dataType: 'json',
            data:{ product_id: val},
            success: function (data) {
                        
                                           
                        for (let [index, param] of Object.entries(data)) {
                            
                            setTimeout(function () { 
                                ajaxform.addFloatForm('" . Url::to(['itqt-one-planner/get-float-form'], true) . "','ajax-document');
                                setTimeout(()=>{
                                    $('#itqt-one-acceptance-criteria-name' + index).val(param.name);                                                                                    
                                      
                                },1000);
                            }, 2000 * index);
                                                                             
                                                      
                        }                                  
            }
      });   
        
    }
", \yii\web\View::POS_END);
?>