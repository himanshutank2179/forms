<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AuditElements */

$this->title = 'Update Audit Elements: ' . $model->audit_element_id;
$this->params['breadcrumbs'][] = ['label' => 'Audit Elements', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->audit_element_id, 'url' => ['view', 'id' => $model->audit_element_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="audit-elements-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
