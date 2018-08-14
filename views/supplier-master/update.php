<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SupplierMaster */

$this->title = 'Update Supplier Master: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Supplier Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->supplier_master_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supplier-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
