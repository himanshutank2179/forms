<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\NonConfirmingProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Non Confirming Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="non-confirming-product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Non Confirming Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'non_confirming_product_id',
            'date',
            'GRN_NO',
            'product_id',
            'resion:ntext',
            //'qty',
            //'balance',
            //'return_to_vendor_qty',
            //'rework_qty',
            //'scrap_qty',
            //'sales_on_discount_qty',
            //'sign_of_prod',
            //'is_deleted',
            //'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
