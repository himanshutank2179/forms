<?php

use app\helpers\AppHelper;
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

            /*'non_confirming_product_id',*/
            'date',
            'GRN_NO',


            [
                'attribute' => 'product_id',
                'value' => function ($data) {
                    return !empty($data->product->product_name) ? $data->product->product_name : 'No Product Selected';
                },
                'filter' => Html::activeDropDownList($searchModel, 'product_id', AppHelper::getAllProducts(), ['class' => 'form-control select','prompt' => 'Filter By Product']),
            ],
            /*'resion:ntext',*/
            [
                'value' => function ($model) {
                    // print_r($model); exit();
                    return $model->resion;
                },
                'class' => \mcms\xeditable\XEditableColumn::className(),
                'url' => 'editable',
                'dataType' => 'text',
                'attribute' => 'resion',
                'format' => 'raw',
                'editable' => [
                    'validate' => new \yii\web\JsExpression('
                                            function(value) {
                                                    if($.trim(value) == "") {
                                                            return "This field is required";
                                                    }
                                            }
                                ')
                ],
            ],

            'qty',
            /*'balance',*/
            [
                'value' => function ($model) {
                    // print_r($model); exit();
                    return $model->balance;
                },
                'class' => \mcms\xeditable\XEditableColumn::className(),
                'url' => 'editable',
                'dataType' => 'text',
                'attribute' => 'balance',
                'format' => 'raw',
                'editable' => [
                    'validate' => new \yii\web\JsExpression('
                                            function(value) {
                                                    if($.trim(value) == "") {
                                                            return "This field is required";
                                                    }
                                            }
                                ')
                ],
            ],
            /*'return_to_vendor_qty',*/
            [
                'value' => function ($model) {
                    // print_r($model); exit();
                    return $model->return_to_vendor_qty;
                },
                'class' => \mcms\xeditable\XEditableColumn::className(),
                'url' => 'editable',
                'dataType' => 'number',
                'attribute' => 'return_to_vendor_qty',
                'format' => 'raw',
                'editable' => [
                    'validate' => new \yii\web\JsExpression('
                                            function(value) {
                                                    if($.trim(value) == "") {
                                                            return "This field is required";
                                                    }
                                            }
                                ')
                ],
            ],
            /*'rework_qty',*/
            [
                'value' => function ($model) {
                    // print_r($model); exit();
                    return $model->rework_qty;
                },
                'class' => \mcms\xeditable\XEditableColumn::className(),
                'url' => 'editable',
                'dataType' => 'number',
                'attribute' => 'rework_qty',
                'format' => 'raw',
                'editable' => [
                    'validate' => new \yii\web\JsExpression('
                                            function(value) {
                                                    if($.trim(value) == "") {
                                                            return "This field is required";
                                                    }
                                            }
                                ')
                ],
            ],
            /*'scrap_qty',*/
            [
                'value' => function ($model) {
                    // print_r($model); exit();
                    return $model->scrap_qty;
                },
                'class' => \mcms\xeditable\XEditableColumn::className(),
                'url' => 'editable',
                'dataType' => 'number',
                'attribute' => 'scrap_qty',
                'format' => 'raw',
                'editable' => [
                    'validate' => new \yii\web\JsExpression('
                                            function(value) {
                                                    if($.trim(value) == "") {
                                                            return "This field is required";
                                                    }
                                            }
                                ')
                ],
            ],
            /*'sales_on_discount_qty',*/
            [
                'value' => function ($model) {
                    // print_r($model); exit();
                    return $model->sales_on_discount_qty;
                },
                'class' => \mcms\xeditable\XEditableColumn::className(),
                'url' => 'editable',
                'dataType' => 'number',
                'attribute' => 'sales_on_discount_qty',
                'format' => 'raw',
                'editable' => [
                    'validate' => new \yii\web\JsExpression('
                                            function(value) {
                                                    if($.trim(value) == "") {
                                                            return "This field is required";
                                                    }
                                            }
                                ')
                ],
            ],
            'sign_of_prod',
            //'is_deleted',
            //'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
