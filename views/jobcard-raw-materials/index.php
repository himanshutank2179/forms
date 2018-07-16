<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\JobcardRawMaterialsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jobcard Raw Materials';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jobcard-raw-materials-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Jobcard Raw Materials', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'jobcard_raw_material_id',
            'item_name',
            'qty',
            'heat_no',
            'lot_no',
            //'tc_no',
            //'jobcard_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
