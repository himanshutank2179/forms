<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\SupplierMasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Supplier Masters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supplier-master-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Supplier Master', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'supplier_master_id',*/
            'name',
            'address:ntext',
            'approved_for_product',
            'rating_performance',
            //'grade',
            //'evaluated_by',
            //'approved_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
