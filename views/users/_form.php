<?php

use app\helpers\AppHelper;
use dosamigos\fileupload\FileUpload;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use app\models\Responsibility;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
$selectedRes = [];

if (!$model->isNewRecord) {
    foreach ($model->employeeResponsibility as $r) {
        array_push($selectedRes, $r->responsibility_id);
    }
    $model->responsibility_id = $selectedRes;
}

?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'emp_code')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'designation')->textInput(['maxlength' => true]) ?>






        </div>
        <div class="col-md-6">

            <?= $form->field($model, 'experience')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'authority')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'signature_of_staff')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'education_qualification')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'professional_education')->textarea(['rows' => 6]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">

            <div class="input-group">
                <?= $form->field($model, 'responsibility_id')->dropDownList(AppHelper::getResponsibility(), ['multiple' => true, 'class' => 'form-control multiselect',
                ]) ?>

                <span class="input-group-btn">
                    <button  style="margin-top: 10px;" class="btn btn-success add-new" type="button"><i class="fa fa-plus"></i></button>
              </span>
            </div>
        </div>

        <div class="col-md-6">

            <label>
                Profile Picture
            </label>
            <br/>

            <?php
            echo FileUpload::widget([
                'name' => 'Users[profile_pic]',
                'url' => [
                    '/uploads/profile-upload'
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
                                            $(".field-users-profile_pic input[type=hidden]").val(data.result.files.name);$("#progress .progress-bar").attr("style","width: 0%;");
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
                            src="<?php echo yii\helpers\BaseUrl::home() ?>uploads/<?= $model->profile_pic ?>"
                            alt="img" style="width:256px;"/>
                    <?php
                }
                ?>
            </div>
            <?php echo $form->field($model, 'profile_pic')->hiddenInput()->label(false); ?>

        </div>




    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$this->registerJs("
    $('.multiselect').select2();
    ", \yii\web\View::POS_END);
?>
<?php
$this->registerJs("
$('.add-new').on('click',function(){                           
    $('#common-popup').modal().find('.modalContent').load('" . \yii\helpers\Url::to(['/responsibility/create'], true) . "');       
});"
    , \yii\web\View::POS_END);
?>

<?php
$this->registerJs("

        
//SUBMMITING COMMENTS FORM DATA USING AJAX     
         
         $('body').on('beforeSubmit', 'form#create-respo', function (e) {
            e.preventDefault();
            var formComent = $(this);
            
            if (formComent.find('.has-error').length) 
            {
                return false;
            }
                // submit form
                $.ajax({
                url    : '" . \yii\helpers\BaseUrl::to(['responsibility/create'], true) . "',
                type   : 'post',            
                data   : formComent.serialize(),
                    success: function (response) 
                    {            
                       
                       if(response.status == 200){
                       
                        $('#users-responsibility_id').append('<option value='+ response.data.responsibility_id +' >'+ response.data.responsibility +'</option>');
                        $('#common-popup').modal('hide');
                        swal('Saved!', 'Unit has been added!', 'success');
                       }                                                                                                                                
                    },
                    error  : function () 
                    {
                        console.log('internal server error');
                    }
                });
            return false;
         });
         

", \yii\web\View::POS_END);
?>
