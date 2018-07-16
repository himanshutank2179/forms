<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OperationMaster */

$this->title = 'Update Operation Master: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Operation Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->operation_master_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="operation-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
