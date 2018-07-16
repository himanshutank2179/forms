<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Responsibility */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="responsibility-form">

    <?php $form = ActiveForm::begin(['id'=>'create-respo']); ?>
    <div class="row">
        <div class="col-md-12">
			<?= $form->field($model, 'responsibility')->textInput(['maxlength' => true]) ?>
		</div>
	</div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
