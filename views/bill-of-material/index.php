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
<div class="bill-of-material-index">

    <h1><?= Html::encode($this->title) ?></h1>
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
                    'attribute'=>'procuring_by',
                'value'=>function($model){
                    return str_replace('_',' ',ucfirst($model->procuring_by));
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>



