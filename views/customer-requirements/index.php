<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomerRequirementsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customer Requirements';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-requirements-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customer Requirements', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'customer_requirement_id',
            'date',
            /*'client_id',*/
            [
                'attribute' => 'client_id',
                'label' => 'Client',
                'value' => function ($data) {
                    return $data->client->name;
                },
                'filter' => Html::activeDropDownList($searchModel, 'client_id', AppHelper::getClients(), ['class' => 'form-control select', 'prompt' => 'Filter By Clients']),

            ],
            'address:ntext',
            'product_info:ntext',
            //'quatation',
            //'quatation_ref',
            //'customer_po_number',
            //'order_review_by',
            //'date_of_dispatch',
            //'item',
            //'invoice_number',
            //'created_at',
            //'is_deleted',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {print}',
                'buttons' => [
                    'print' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-print"></span>', \yii\helpers\Url::to(['print', 'id' => $model->customer_requirement_id]), ['target' => '_blank', 'data-pjax' => "0"]);
                    },
                ],
            ]
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
