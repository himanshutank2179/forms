<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BillOfMaterialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bill Of Materials';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    span.glyphicon.glyphicon-print {
        font-size: 25px;
    }
</style>
<div class="bill-of-material-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-md-8">
            <?= Html::dropDownList('', '', AppHelper::getProductsCode(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>
        </div>
        <div class="col-md-4">
            <?= Html::a('<span class="glyphicon glyphicon-print"></span>', \yii\helpers\Url::to(['print', 'id' => 1]), ['target' => '_blank', 'data-pjax' => "0", 'class' => 'print_btn']) ?>
        </div>
    </div>

    <br>




    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bill Of Material', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'bill_of_material_id',*/
            /*'raw_materia_id',*/
            [
                'attribute' => 'raw_materia_id',
                'value' => function ($model) {
                    return $model->rawMaterial->product_name;
                },
                'filter' => Html::activeDropDownList($searchModel, 'raw_materia_id', AppHelper::getRawMaterials(), ['class' => 'form-control select', 'prompt' => 'Filter By Raw Materials']),
            ],
            'qty',
            'unit_id',
            'product_code',
            [
                'attribute' => 'procuring_by',
                'value' => function ($model) {
                    return str_replace('_', ' ', ucfirst($model->procuring_by));
                }
            ],

            [
                'attribute' => 'document_id',
                'value' => function ($model) {
                    return Html::a($model->document->name_of_document, \yii\helpers\Url::to(['documents-and-distribution-master/view', 'id' => $model->document->documents_and_distribution_master_id], true), ['class' => 'open_common_popup']);
                },
                'format' => 'raw',

            ],

            //'is_deleted',
            //'created_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete}',
                'buttons' => [
                    'print' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-print"></span>', \yii\helpers\Url::to(['print', 'id' => $model->bill_of_material_id]), ['target' => '_blank', 'data-pjax' => "0"]);
                    },
                ],
            ]
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>



<?php
$this->registerJs("
    $('.select4').on('change',function (e) {
        var n = $(this).val();
        console.log(n);
        
        var newUrl = 'bill-of-material/print?prod_code=' + n;
        console.log('newUrl = ', newUrl );
        $('.print_btn').attr('href',newUrl);
        
        
        
        //print_btn
    });      

", \yii\web\View::POS_END);
?>

