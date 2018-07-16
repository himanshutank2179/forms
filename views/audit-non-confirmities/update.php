<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AuditNonConfirmities */

$this->title = 'Update Audit Non Confirmities: ' . $model->audit_non_confirmities_id;
$this->params['breadcrumbs'][] = ['label' => 'Audit Non Confirmities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->audit_non_confirmities_id, 'url' => ['view', 'id' => $model->audit_non_confirmities_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="audit-non-confirmities-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
