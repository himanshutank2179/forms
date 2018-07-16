<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CustomerRequirements */

$this->title = 'Update Customer Requirements: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Customer Requirements', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->customer_requirement_id, 'url' => ['view', 'id' => $model->customer_requirement_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="customer-requirements-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
