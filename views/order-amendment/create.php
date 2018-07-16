<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OrderAmendment */

$this->title = 'Create Order Amendment';
$this->params['breadcrumbs'][] = ['label' => 'Order Amendments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-amendment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
