<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CorrectiveActionPlan */

$this->title = 'Create Corrective Action Plan';
$this->params['breadcrumbs'][] = ['label' => 'Corrective Action Plans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="corrective-action-plan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
