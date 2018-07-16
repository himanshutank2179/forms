<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JobcardRawMaterials */

$this->title = 'Update Jobcard Raw Materials: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Jobcard Raw Materials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jobcard_raw_material_id, 'url' => ['view', 'id' => $model->jobcard_raw_material_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jobcard-raw-materials-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
