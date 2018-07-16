<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\JobcardRawMaterials */

$this->title = $model->jobcard_raw_material_id;
$this->params['breadcrumbs'][] = ['label' => 'Jobcard Raw Materials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jobcard-raw-materials-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->jobcard_raw_material_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->jobcard_raw_material_id], [
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
            'jobcard_raw_material_id',
            'item_name',
            'qty',
            'heat_no',
            'lot_no',
            'tc_no',
            'jobcard_id',
        ],
    ]) ?>

</div>
