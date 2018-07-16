<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jobcard */

$this->title = 'Update Jobcard: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Jobcards', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jobcard_id, 'url' => ['view', 'id' => $model->jobcard_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jobcard-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
