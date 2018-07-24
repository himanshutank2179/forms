<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JobcardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jobcards';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jobcard-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Jobcard', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'jobcard_id',*/
            'date',

            [
                'attribute' => 'finish_product_id',
                'value' => function ($model) {
                    return $model->finishProduct->product_name;
                },
                'filter' => Html::activeDropDownList($searchModel, 'finish_product_id', AppHelper::getRawMaterials(), ['class' => 'form-control select4', 'prompt' => 'Filter By Valve']),
            ],
            'material',
            //'size',
            //'qty',
            //'class',
            //'remark:ntext',
            //'is_deleted',
            //'created_at',


            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {print} {duplicate}',
                'buttons' => [
                    'print' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-print"></span>', \yii\helpers\Url::to(['print-jobcard', 'id' => $model->jobcard_id]), ['target' => '_blank', 'data-pjax' => "0", 'title' => 'Print']);
                    },
                    'duplicate' => function ($url, $model) {
                        return Html::a('<i class="fa fa-fw fa-copy"></i>', \yii\helpers\Url::to(['duplicate', 'id' => $model->jobcard_id]), ['title' => 'Duplicate']);
                    },
                ],
            ]
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>


