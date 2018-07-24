<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SuppilerEvaluation */

$this->title = 'Create Suppiler Evaluation';
$this->params['breadcrumbs'][] = ['label' => 'Suppiler Evaluations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suppiler-evaluation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
