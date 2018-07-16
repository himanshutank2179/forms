<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DebitNote */

$this->title = 'Create Debit Note';
$this->params['breadcrumbs'][] = ['label' => 'Debit Notes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="debit-note-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
