<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Parameters */

$this->title = 'Update Parameters: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Parameters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->parameter_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="parameters-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
