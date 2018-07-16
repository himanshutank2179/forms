<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IncommingQc */

$this->title = 'Update Incomming Qc';
$this->params['breadcrumbs'][] = ['label' => 'Incomming Qcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->incomming_qc_id, 'url' => ['view', 'id' => $model->incomming_qc_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="incomming-qc-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
