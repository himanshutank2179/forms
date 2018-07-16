<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Responsibility */

$this->title = 'Update Responsibility: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Responsibilities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->responsibility_id, 'url' => ['view', 'id' => $model->responsibility_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="responsibility-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
