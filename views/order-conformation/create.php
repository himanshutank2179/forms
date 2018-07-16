<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OrderConformation */

$this->title = 'Create Order Conformation';
$this->params['breadcrumbs'][] = ['label' => 'Order Conformations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-conformation-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
