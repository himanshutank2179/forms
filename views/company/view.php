<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Company */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->company_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->company_id], [
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
            /*'company_id',*/
            'name',
            'email:email',
            'contact_person_no',
            'account_number',
            'bank_ifsc',
            'gstin',
            'pan',
            'flat',
            'street',
            'landmark',
            'area',
            /*'city_id',*/
            /*'state_id',*/
            [
                'attribute' => 'city_id',

                'value' => function ($data) {
                    return $data->city->name;
                },
                'filter' => false
            ],
            [
                'attribute' => 'state_id',

                'value' => function ($data) {
                    return $data->state->name;
                },
                'filter' => false
            ],
            /*'country_id',*/
            [
                'attribute' => 'country_id',

                'value' => function ($data) {
                    return $data->country->name;
                },
                'filter' => false
            ],
           /* 'is_deleted',
            'created_at',*/
        ],
    ]) ?>

</div>
