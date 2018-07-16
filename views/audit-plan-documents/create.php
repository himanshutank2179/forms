<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AuditPlanDocuments */

$this->title = 'Create Audit Plan Documents';
$this->params['breadcrumbs'][] = ['label' => 'Audit Plan Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-plan-documents-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
