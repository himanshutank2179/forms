<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JobcardOperationDetails */

$this->title = 'Update Jobcard Operation Details';
$this->params['breadcrumbs'][] = ['label' => 'Jobcard Operation Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jobcard_operation_detail_id, 'url' => ['view', 'id' => $model->jobcard_operation_detail_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jobcard-operation-details-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
