<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SuppilerEvaluation */

$this->title = 'Update Suppiler Evaluation: ' . $model->sppiler_evaluation_id;
$this->params['breadcrumbs'][] = ['label' => 'Suppiler Evaluations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sppiler_evaluation_id, 'url' => ['view', 'id' => $model->sppiler_evaluation_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="suppiler-evaluation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
