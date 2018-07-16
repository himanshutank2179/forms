<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductMfgTracker */

$this->title = 'Update Product Mfg Tracker: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Product Mfg Trackers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->product_mfg_tracker_id, 'url' => ['view', 'id' => $model->product_mfg_tracker_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-mfg-tracker-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
