<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AuditPlanStandardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Audit Plan Standards';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-plan-standard-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Audit Plan Standard', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'audit_plan_standard_id',
            'standard_doc_record_management:ntext',
            'standard_quality_policy:ntext',
            'standard_responsibility:ntext',
            'standard_planning_and_determination:ntext',
            //'standard_production_control:ntext',
            //'standard_monitoring:ntext',
            //'company_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
