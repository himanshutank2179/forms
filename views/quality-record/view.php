<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\QualityRecord */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Quality Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quality-record-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->quality_record_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->quality_record_id], [
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
            'quality_record_id',
            'title',
            'quality_record_no',
            'revision',
            'date_of_issue',
            'retension',
            'frequency',
            'maintend_by',
            'medium',
            'is_deleted',
            'created_at',
        ],
    ]) ?>

</div>
