<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BillOfMaterial */

$this->title = 'Update Bill Of Material: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Bill Of Materials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bill_of_material_id, 'url' => ['view', 'id' => $model->bill_of_material_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bill-of-material-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
