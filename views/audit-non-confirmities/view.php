<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AuditNonConfirmities */

$this->title = $model->audit_non_confirmities_id;
$this->params['breadcrumbs'][] = ['label' => 'Audit Non Confirmities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-non-confirmities-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->audit_non_confirmities_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->audit_non_confirmities_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'audit_non_confirmities_id',
            'design_dev',
            'non-confirming_class',
            'non_confirmitie',
            'company_id',
        ],
    ]) ?>

</div>
