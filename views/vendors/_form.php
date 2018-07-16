<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use dosamigos\fileupload\FileUpload;
use app\models\VendorMobile;

/* @var $this yii\web\View */
/* @var $model app\models\Vendors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vendors-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6"><?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?></div>
        <div class="col-md-6"><?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?></div>
    </div>

    <div class="row">
        <div class="col-md-6"><?= $form->field($model, 'address')->textarea(['rows' => 6]) ?></div>
        <div class="col-md-6"><?= $form->field($model, 'office_address')->textarea(['rows' => 6]) ?></div>
    </div>

    <div class="row">
        <div class="col-md-6"><?= $form->field($model, 'contact_person_name')->textInput(['maxlength' => true]) ?></div>
        <div class="col-md-6"><?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?></div>
    </div>

    <div class="row">
        <div class="col-md-6"><?= $form->field($model, 'account_number')->textInput(['maxlength' => true]) ?></div>
        <div class="col-md-6"><?= $form->field($model, 'bank_ifsc')->textInput(['maxlength' => true]) ?></div>
    </div>

    <div class="row">
        <div class="col-md-6"><?= $form->field($model, 'gstin')->textInput(['maxlength' => true]) ?></div>
        <div class="col-md-6"><?= $form->field($model, 'pan')->textInput(['maxlength' => true]) ?></div>
    </div>

    <div class="row">
        <div class="col-md-6"><?= $form->field($model, 'flat')->textInput(['maxlength' => true]) ?></div>
        <div class="col-md-6"><?= $form->field($model, 'country_id')->dropDownList(AppHelper::getCountries(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?></div>
    </div>

    <div class="row">
        <div class="col-md-6"><?= $form->field($model, 'state_id')->dropDownList(AppHelper::getStates(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?></div>
        <div class="col-md-6"><?= $form->field($model, 'city_id')->dropDownList(AppHelper::getCity(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?></div>
    </div>

    <div class="row">
        <div class="col-md-6">



            <?php // echo  $form->field($model, 'phone')->textInput()  ?>

            <?= $form->field($model, 'street')->textInput(); ?>
            <?= $form->field($model, 'is_deleted')->hiddenInput(['value' => 0])->label(false); ?>

            <?= $form->field($model, 'created_at')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false); ?>
        </div>
        <div class="col-md-6">

        </div>
    </div>

    <div class="row">
        <div class="col-md-6">

            <label>
                Profile Picture
            </label>
            <br/>

            <?php
            echo FileUpload::widget([
                'name' => 'Vendors[photo]',
                'url' => [
                    '/uploads/common?attribute=Vendors[photo]'
                ],
                'options' => [
                    'accept' => 'image/*',
                ],
                'clientOptions' => [
                    'dataType' => 'json',
                    'maxFileSize' => 2000000,
                ],
                'clientEvents' => [
                    'fileuploadprogressall' => "function (e, data) {
                                        var progress = parseInt(data.loaded / data.total * 100, 10);
                                        $('#progress').show();
                                        $('#progress .progress-bar').css(
                                            'width',
                                            progress + '%'
                                        );
                                     }",
                    'fileuploaddone' => 'function (e, data) {
                                        if(data.result.files.error==""){
                                            
                                            var img = \'<br/><img class="img-responsive" src="' . yii\helpers\BaseUrl::home() . 'uploads/\'+data.result.files.name+\'" alt="img" style="width:256px;"/>\';
                                            $("#profile_pic").html(img);
                                            $(".field-vendors-photo input[type=hidden]").val(data.result.files.name);$("#progress .progress-bar").attr("style","width: 0%;");
                                            $("#progress").hide();
                                        }
                                        else{
                                           $("#progress .progress-bar").attr("style","width: 0%;");
                                           $("#progress").hide();
                                           var errorHtm = \'<span style="color:#dd4b39">\'+data.result.files.error+\'</span>\';
                                           $("#profile_pic").html(errorHtm);
                                           setTimeout(function(){
                                               $("#profile_pic span").remove();
                                           },3000)
                                        }
                                    }',
                ],
            ]);
            ?>
            <!--                <lable class="text-info"> Image size should be 700 X 466 px</lable>-->
            <br>
            <div id="progress" class="progress" style="display: none;">
                <div class="progress-bar progress-bar-success"></div>
            </div>
            <div id="profile_pic">
                <?php
                if (!$model->isNewRecord) {
                    ?>
                    <br/><img
                            src="<?php echo yii\helpers\BaseUrl::home() ?>uploads/<?php echo $model->photo ?>"
                            alt="img" style="width:256px;"/>
                    <?php
                }
                ?>
            </div>
            <?php echo $form->field($model, 'photo')->hiddenInput()->label(false); ?>

        </div>

        <div class="col-md-6">

                <div id="ajax-document">
                    <?php if (!$model->isNewRecord): ?>
                        <?php $all_mobiles = VendorMobile::find()->where(['vendor_id' => $model->vendor_id])->all();
                        foreach ($all_mobiles as $key => $value) : ?>
                            <div class="animated bounceInRight create-po document-form" id="<?= $key ?>">
                                <div class="row">
                                    <div class="col-md-10">
                                        <label for="vendors-mobile-<?= $key ?>"> Mobile </label>
                                        <?= Html::activeTextInput($value, 'vendor_mobile[]', [
                                            'maxlength' => true,
                                            'class' => 'form-control',
                                            'id' => 'vendors-mobile-' . $key,
                                            'required' => true,
                                            'type' => 'number',
                                            'value' => $value->vendor_mobile,
                                        ]); ?>
                                    </div>
                                    <div class="col-md-2"><br>
                                        <button class="btn btn-danger"
                                                onclick="ajaxform.removeBlankFloatForm('<?php echo $key ?>')">Remove
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

            <br>
            <div class="row">
                <div class="col-md-12">
                    <a id="add-mobile"
                       onclick="ajaxform.addFloatForm('<?= Url::to(['vendors/get-float-form'], true) ?>','ajax-document')"
                       href="javascript:;"
                       class="btn btn-info col-md-12">Add More Mobile</a>
                </div>
            </div>
        </div>

    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
if ($model->isNewRecord) {
    $this->registerJs("
    $('#add-mobile').trigger('click');
", \yii\web\View::POS_END);
}
?>


