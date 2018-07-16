<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomerComplaintRecordSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customer Complaint Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-complaint-record-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customer Complaint Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'customer_complaint_record_id',*/
            'date',
            'customer_name',
            'customer_address',
            'reference',
            //'type_of_complaint',
            //'product_name',
            //'c_responsibility',
            //'c_cataken',
            //'c_sign',
            //'p_responsibility',
            //'p_cataken',
            //'p_sign',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
