<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OrderQuotation */

$this->title = 'Create Order Quotation';
$this->params['breadcrumbs'][] = ['label' => 'Order Quotations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-quotation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
