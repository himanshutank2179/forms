<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BomMfgTrackerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bom Mfg Trackers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bom-mfg-tracker-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bom Mfg Tracker', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bom_mfg_tracker_id',
            'product_id',
            'raw_material_id',
            'units',
            'unit_of_measure_id',
            //'raw_material_units_used_till_now',
            //'available_raw_material',
            //'products_made',
            //'id_deleted',
            //'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
