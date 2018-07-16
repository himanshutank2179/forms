<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DebitNote */

$this->title = 'Update Debit Note: ' . $model->debit_note_id;
$this->params['breadcrumbs'][] = ['label' => 'Debit Notes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->debit_note_id, 'url' => ['view', 'id' => $model->debit_note_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="debit-note-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
