<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MachineMaster */

$this->title = 'Update Machine Master: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Machine Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->machine_master_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="machine-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
