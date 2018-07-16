<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IncommingQcSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Incomming Qcs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="incomming-qc-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Incomming Qc', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'incomming_qc_id',*/
            'GRN_NO',
            [
                'attribute' => 'product_id',
                'value' => function ($model) {
                    return $model->product->product_name;
                }
            ],
            'manufacturer',
            'label_particulars',
            'mfg_date',
            'qty',
            'accepted_qty',
            'rejected_qty',

            [

                'attribute' => 'is_approved',
                'format' => 'raw',
                'value' => function ($model) {
                    $CHK = $model->is_approved == 0 ? '' : 'checked';
                    $val = $model->is_approved;


                    return '<div class="onoffswitch">'
                        . '<input type="checkbox" class="onoffswitch-checkbox tevent" id="myonoffswitch' . $model->incomming_qc_id . '" value="' . $val . '" ' . $CHK . ' data-id="' . $model->incomming_qc_id . '" style="visibility: hidden;">'
                        . '<label class="onoffswitch-label" for="myonoffswitch' . $model->incomming_qc_id . '"></label>'
                        . '</div>';
                },
                'filter' => false,
            ],
            //'heat',
            //'lot',
            //'batch_no',
            //'v_test_no',
            //'date',
            //'general_condition',
            //'product_id',

            //'visual_examination',
            //'dimensional_check',

            //'product_traceability_mark',
            //'remark:ntext',
            //'inspected_by',
            //'approved_by',
            //'is_deleted',
            //'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
<?php
$this->registerJs("
$('.tevent').click(function () {

                if ($(this).prop('checked') == true) {
                    $.ajax({
                        url: '" . \yii\helpers\Url::to(['approval']) . "',
                        data: {id: $(this).data('id')},
                        dataType: 'json',
                        success: function (data) {

                            console.log(data);
                        }
                    });
                } else {
                    $.ajax({
                        url: '" . \yii\helpers\Url::to(['approval']) . "',
                        data: {id: $(this).data('id')},
                        dataType: 'json',
                        success: function (data) {
                            console.log(data);
                        }
                    });


                }
            });
", \yii\web\View::POS_END);
?>
