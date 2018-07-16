<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DebitNoteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Debit Notes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="debit-note-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Debit Note', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'debit_note_id',*/
            'party_name',
            'address1:ntext',
            'address2:ntext',
            'address3:ntext',
            //'debit_note_no',
            //'date',
            //'bill_no',
            //'bill_date',
            //'delivery_charges',
            //'party_gst_no',
            //'company_gst_no',
            //'party_gst',
            //'company_gst',
            //'total',
            //'remark:ntext',
            //'is_deleted',
            //'created_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {print}',
                'buttons' => [
                    'print' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-print"></span>', \yii\helpers\Url::to(['print', 'id' => $model->debit_note_id]), ['target' => '_blank', 'data-pjax' => "0"]);
                    },
                ],
            ]
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
