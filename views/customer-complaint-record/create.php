<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CustomerComplaintRecord */

$this->title = 'Create Customer Complaint Record';
$this->params['breadcrumbs'][] = ['label' => 'Customer Complaint Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-complaint-record-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
