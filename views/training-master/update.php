<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TrainingMaster */

$this->title = 'Update Training Master: ' . $model->training_master_id;
$this->params['breadcrumbs'][] = ['label' => 'Training Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->training_master_id, 'url' => ['view', 'id' => $model->training_master_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="training-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
