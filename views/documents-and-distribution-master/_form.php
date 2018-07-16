<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use kartik\widgets\FileInput;
use kartik\file\FileInput;
use yii\helpers\Url;
use dosamigos\fileupload\FileUpload;

/* @var $this yii\web\View */
/* @var $model app\models\DocumentsAndDistributionMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="documents-and-distribution-master-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model)  ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'name_of_document')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'document_no')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'issue_no')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'revision')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'date_of_issue')->textInput(['class' => 'datepicker form-control']) ?>

            <?= $form->field($model, 'copy_holders_department')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'sign_of_receiver')->textInput(['maxlength' => true]) ?>

            <br><br><?= $form->field($model, 'is_international')->checkboxList([1 => 'Is International',])->label(false); ?>
        </div>
    </div>

    <div class="row">

            <div class="col-md-12">
                <?php
                $previewImg = array();
                $initialPreviewConfig = array();

                if (!$model->isNewRecord) {

                    $modelImage = app\models\DocumentsFiles::find()->where(['documents_and_distribution_master_id' => $model->documents_and_distribution_master_id])->all();

                    if (!empty($modelImage)) {

                        foreach ($modelImage as $user_image) {
                            $prev = Html::img(yii\helpers\BaseUrl::home() . "uploads/" . $user_image->image, ['class' => 'file-preview-image img-responsive', 'alt' => 'img']);
                            $a = Html::hiddenInput("DocumentsAndDistributionMaster[images][]", $user_image->image, [
                                'id' => 'DocumentsAndDistributionMaster-images'
                            ]);
                            array_push($previewImg, $prev);

                            $b = ['url' => yii\helpers\BaseUrl::home() . "uploads/filedelete", 'key' => $user_image->documents_file_id];
                            array_push($initialPreviewConfig, $b);
                        }
                    }
                }

                echo $form->field($model, 'images')->widget(FileInput::classname(), [
                    'options' => [
                        'accept' => 'image/*',
                        'multiple' => true,

                    ],
                    'pluginOptions' => [
                        'uploadUrl' => Url::to(['/uploads/document-upload']),
                        'FileCount' => 10,
                        'initialPreview' => $previewImg,
                        'initialPreviewConfig' => $initialPreviewConfig,
                        'overwriteInitial' => false
                    ],
                    'pluginEvents' => [
                        'fileimageloaded' => 'function(event, previewId) {
                                    //console.log(event);
                                }'
                    ]
                ])->label(Yii::t('app', 'Documents'));
                ?>
                <div style="color: #dd4b39" id="upload_error" class="help-block"></div>

            </div>

        </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

<?php
$this->registerJs('$("#documentsanddistributionmaster-images").on("fileuploaded", function (event, data, previewId, index) {
                                                            console.log(previewId);
                                                                            $("#" + previewId).append(\'<input type="hidden" name="DocumentsAndDistributionMaster[images][]" id="documentsanddistributionmaster-images" value="\'+data.response.image+\'">\');
                                                                        });', \yii\web\View::POS_END);
?>

    <?php ActiveForm::end(); ?>

</div>
<?php
$this->registerJs("

    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        startDate: 'today',        
        autoclose: true
    });
    
", \yii\web\View::POS_END);

?>