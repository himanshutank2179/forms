<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocumentsAndDistributionMaster */

$this->title = 'Update Documents And Distribution Master: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Documents And Distribution Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->documents_and_distribution_master_id, 'url' => ['view', 'id' => $model->documents_and_distribution_master_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="documents-and-distribution-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
