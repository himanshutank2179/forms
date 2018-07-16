<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NonConfirmingProduct */

$this->title = 'Update Non Confirming Product: ' . $model->non_confirming_product_id;
$this->params['breadcrumbs'][] = ['label' => 'Non Confirming Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->non_confirming_product_id, 'url' => ['view', 'id' => $model->non_confirming_product_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="non-confirming-product-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
