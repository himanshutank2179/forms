<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ContractReview */

$this->title = 'Update Contract Review: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Contract Reviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->contract_review_id, 'url' => ['view', 'id' => $model->contract_review_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contract-review-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
