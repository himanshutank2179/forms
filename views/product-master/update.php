<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductMaster */

$this->title = 'Update Item';
$this->params['breadcrumbs'][] = ['label' => 'Product Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->product_master_id, 'url' => ['view', 'id' => $model->product_master_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-master-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
