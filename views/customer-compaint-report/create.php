<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CustomerCompaintReport */

$this->title = 'Create Customer Complaint Report';
$this->params['breadcrumbs'][] = ['label' => 'Customer Complaint Reports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-compaint-report-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
