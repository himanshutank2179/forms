<?php

use app\helpers\AppHelper;
use dosamigos\fileupload\FileUpload;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Company */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="company-form">

        <?php $form = ActiveForm::begin(); ?>

        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'contact_person_no')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'account_number')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'bank_ifsc')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'gstin')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'pan')->textInput(['maxlength' => true]) ?>


                <div class="company-logo-container">
                    <label>Company Logo</label><br>
                    <?php
                    echo FileUpload::widget([
                        'name' => 'Company[image]',
                        'url' => [
                            '/uploads/common?attribute=Company[image]'
                        ],
                        'options' => [
                            'accept' => 'image/*',
                        ],
                        'clientOptions' => [
                            'dataType' => 'json',
                            'maxFileSize' => 2000000,
                        ],
                        'clientEvents' => [
                            'fileuploaddone' => 'function(e, data) {
                                //console.log(e);
                                //console.log(data.result.files.name);
                                if(data.result.files.error==""){
                                    var img = \'<br/><img id="target2" class="project-img" src="' . yii\helpers\BaseUrl::home() . 'uploads/\'+data.result.files.name+\'" alt="img" style="width:256px;"/>\';
                                    $("#uploaded_img").html(img);
                                    $(".field-company-image input[type=hidden]").val(data.result.files.name);
                                    $("#progress .progress-bar").attr("style","width: 0%;");
                                    $("#progress").hide();
                                }
                                else{
                                    $("#progress .progress-bar").attr("style","width: 0%;");
                                    $("#progress").hide();
                                    var errorHtm = \'<span style="color:#dd4b39">\'+data.result.files.error+\'</span>\';
                                    $("#uploaded_img").html(errorHtm);
                                    setTimeout(function(){
                                        $("#uploaded_img span").remove();
                                    },3000)
                                }
                            }',
                            'fileuploadfail' => 'function(e, data) {
                                console.log(e);
                                console.log(data);
                            }',
                            'fileuploadprogressall' => "function (e, data) {
                        var progress = parseInt(data.loaded / data.total * 100, 10);
                        $('#progress').show();
                        $('#progress .progress-bar').css(
                            'width',
                            progress + '%'
                        );
                     }",
                        ],
                    ]);
                    ?>


                    <div id="progress" class="progress" style="display: none; margin-top: 10px;">
                        <div class="progress-bar progress-bar-success"></div>
                    </div>


                    <div id="uploaded_img">
                        <?php
                        if (!$model->isNewRecord) {
                            if ($model->image != " ") {
                                ?>
                                <br/><img
                                        src="<?php echo yii\helpers\BaseUrl::home() ?>uploads/<?php echo $model->image ?>"
                                        alt="img" style="width:256px;"/>
                                <?php
                            }
                        }
                        ?>
                    </div>
                    <?= $form->field($model, 'image')->hiddenInput()->label(false) ?>


                </div>


            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'flat')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'street')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'landmark')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'area')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'country_id')->dropDownList(AppHelper::getCountries(), ['class' => 'form-control select4', 'prompt' => 'Please Select', 'onchange' => '$.post( "' . Yii::$app->urlManager->createUrl('company/state-list?id=') . '"+$(this).val(), function( data ) {
                    $( "#company-state_id" ).html( data );
                });
            ']) ?>

                <?= $form->field($model, 'state_id')->dropDownList([], ['class' => 'form-control select4', 'prompt' => 'Please Select', 'onchange' => '$.post( "' . Yii::$app->urlManager->createUrl('order-quotation/city-list?id=') . '"+$(this).val(), function( data ) {
                    $( "#company-city_id" ).html( data );
                });
            ']) ?>


                <?= $form->field($model, 'city_id')->dropDownList([], ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>

            </div>
        </div>


        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
<?php
$this->registerJs("$('.select4').select2({placeholder: 'Please Select',});", \yii\web\View::POS_END);
?>