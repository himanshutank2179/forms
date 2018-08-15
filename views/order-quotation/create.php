<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OrderQuotation */
$type = Yii::$app->getRequest()->getQueryParam('type');
if($type == 'requirements'){
    $this->title = 'Create Customer Requirements';
    $this->params['breadcrumbs'][] = ['label' => 'Customer Requirements', 'url' => ['index?type=requirements']];
    $this->params['breadcrumbs'][] = $this->title;
} else {
    $this->title = 'Create Order Quotation';
    $this->params['breadcrumbs'][] = ['label' => 'Order Quotations', 'url' => ['index?type=quotations']];
    $this->params['breadcrumbs'][] = $this->title;
}

?>
<div class="order-quotation-create">

    <h3 class="text-center"><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
