<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\InstrumentMasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Instrument Masters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instrument-master-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Instrument Master', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'instrument_master_id',*/
            'name_of_instrument',
            'instrument_identification_no',
            'make_and_sr_no',
            'capacity',
            //'least_count',
            //'acceptance_criteria',
            //'calibration_certi_no',
            //'date',
            //'next_due_on',
            //'sign_qc',
            //'is_deleted',
            //'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>