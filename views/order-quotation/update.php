<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OrderQuotation */
$type = Yii::$app->getRequest()->getQueryParam('type');
if ($type == 'requirements') {
    $this->title = 'Update Customer Requirements';
    $this->params['breadcrumbs'][] = ['label' => 'Customer Requirements', 'url' => ['index?type=' . $type]];
    $this->params['breadcrumbs'][] = ['label' => $model->order_quotation_id, 'url' => ['view?type=' . $type, 'id' => $model->order_quotation_id, 'type' => $type]];
    $this->params['breadcrumbs'][] = 'Update';
} else {
    $this->title = 'Update Order Quotation';
    $this->params['breadcrumbs'][] = ['label' => 'Order Quotations', 'url' => ['index?type=' . $type]];
    $this->params['breadcrumbs'][] = ['label' => $model->order_quotation_id, 'url' => ['view?type=' . $type, 'id' => $model->order_quotation_id]];
    $this->params['breadcrumbs'][] = 'Update';
}

?>
<div class="order-quotation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
