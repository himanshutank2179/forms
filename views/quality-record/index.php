<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\QualityRecordSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Quality Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quality-record-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Quality Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'quality_record_id',*/
            'title',
            'quality_record_no',
            'revision',
            'date_of_issue',
            //'retension',
            //'frequency',
            //'maintend_by',
            //'medium',
            //'is_deleted',
            //'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
