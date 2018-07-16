<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\InspectionPlaner */

$this->title = 'Create Inspection Planer';
$this->params['breadcrumbs'][] = ['label' => 'Inspection Planers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inspection-planer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
