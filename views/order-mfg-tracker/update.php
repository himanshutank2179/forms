<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OrderMfgTracker */

$this->title = 'Update Order Mfg Tracker: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Order Mfg Trackers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->order_mfg_tracker_id, 'url' => ['view', 'id' => $model->order_mfg_tracker_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order-mfg-tracker-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
