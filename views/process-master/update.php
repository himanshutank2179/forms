<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProcessMaster */

$this->title = 'Update Process Master: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Process Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->process_master_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="process-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
