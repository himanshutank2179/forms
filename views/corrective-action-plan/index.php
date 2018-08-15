<?php

use app\helpers\AppHelper;
use kartik\export\ExportMenu;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CorrectiveActionPlanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Corrective Action Plans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="corrective-action-plan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Corrective Action Plan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
    $gridColumns = [
        'date',
        [
            'attribute' => 'department_id',
            'value' => function ($data) {
                return $data->department->name;
            },
        ],
        [
            'attribute' => 'identified_by',
            'value' => function ($data) {
                return ucfirst($data->identifiedBy->name);
            },
        ],
        [
            'attribute' => 'taken_by',
            'value' => function ($data) {
                return ucfirst($data->identifiedBy->name);
            },
        ],
        'non_confirmitie:raw',
        'non_confirmitie_desc:ntext',
        'result_of_investigation:ntext',
        'identified_by',
        'c_action_recomand',
        'responsibility',
        'evidence:ntext',
        'taken_by',
        'document_change:ntext',
        'correction_effect:ntext',
        'applicable_doc:ntext',
        'management_representative',
    ];
    ?>

    <?=
    ExportMenu::widget([
        'dataProvider' => $dataProvider,
        'columns' => $gridColumns,
        'fontAwesome' => true,
        'filename' => 'corrective_action_plan',
        'exportConfig' => [
            ExportMenu::FORMAT_TEXT => false,
            ExportMenu::FORMAT_CSV => false,
            ExportMenu::FORMAT_HTML => false,
            ExportMenu::FORMAT_EXCEL_X => false
        ],
    ]);
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'corrective_action_plan_id',
            'date',
            [
                'attribute' => 'department_id',

                'value' => function ($data) {
                    return $data->department->name;
                },
                'filter' => Html::activeDropDownList($searchModel, 'department_id', AppHelper::getDepartments(), ['class' => 'form-control select', 'prompt' => 'Filter By Department']),
            ],
            [
                'attribute' => 'identified_by',

                'value' => function ($data) {
                    return ucfirst($data->identifiedBy->name);
                },
                'filter' => Html::activeDropDownList($searchModel, 'identified_by', AppHelper::getEmployee(), ['class' => 'form-control select', 'prompt' => 'Filter By Users']),
            ],
            [
                'attribute' => 'taken_by',

                'value' => function ($data) {
                    return ucfirst($data->identifiedBy->name);
                },
                'filter' => Html::activeDropDownList($searchModel, 'taken_by', AppHelper::getEmployee(), ['class' => 'form-control select', 'prompt' => 'Filter By Users']),
            ],
            //  'non_confirmitie',
            //'non_confirmitie_desc:ntext',
            //'result_of_investigation:ntext',
            //'identified_by',
            //'c_action_recomand',
            //'responsibility',
            //'evidence:ntext',
            //'taken_by',
            //'document_change:ntext',
            //'correction_effect:ntext',
            //'applicable_doc:ntext',
            //'management_representative',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {print}',
                'buttons' => [
                    'print' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-print"></span>', \yii\helpers\Url::to(['print', 'id' => $model->corrective_action_plan_id]), ['target' => '_blank', 'data-pjax' => "0"]);
                    },
                ],
            ]
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
