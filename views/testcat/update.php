<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Testcat */

$this->title = 'Update Testcat: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Testcats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->testcat_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="testcat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
