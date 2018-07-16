<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AuditPlanStandard */

$this->title = 'Create Audit Plan Standard';
$this->params['breadcrumbs'][] = ['label' => 'Audit Plan Standards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-plan-standard-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
