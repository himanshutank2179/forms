<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\NonConfirmingProduct */

$this->title = 'Create Non Confirming Product';
$this->params['breadcrumbs'][] = ['label' => 'Non Confirming Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="non-confirming-product-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
