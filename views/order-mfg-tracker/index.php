<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\OrderMfgTrackerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Mfg Trackers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-mfg-tracker-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order Mfg Tracker', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'order_mfg_tracker_id',
            'order_number',
            'order_type',
            'order_date',
            'expected_date',
            //'product_id',
            //'qty',
            //'notes:ntext',
            //'is_deleted',
            //'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
