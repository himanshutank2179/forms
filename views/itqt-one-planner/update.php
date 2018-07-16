<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ItqtOnePlanner */

$this->title = 'Update Itqt One Planner: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Itqt One Planners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->itqt_one_planner_id, 'url' => ['view', 'id' => $model->itqt_one_planner_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="itqt-one-planner-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
