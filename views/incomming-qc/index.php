<?php

use app\helpers\AppHelper;
use kartik\export\ExportMenu;
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

    <?php
    $gridColumns = [
        'GRN_NO',
        [
            'attribute' => 'product_id',
            'value' => function ($model) {
                return $model->product->product_name;
            }
        ],

        [
            'attribute' => 'manufacturer',
            'value' => function ($model) {
                return !empty($model->manufacturer) ? $model->manufacturer : 'N/A';
            }
        ],

        [
            'attribute' => 'label_particulars',
            'value' => function ($model) {
                return !empty($model->label_particulars) ? $model->label_particulars : 'N/A';
            }
        ],
        [
            'attribute' => 'mfg_date',
            'value' => function ($model) {
                return !empty($model->mfg_date) ? $model->mfg_date : 'N/A';
            }
        ],
        [
            'attribute' => 'qty',
            'value' => function ($model) {
                return !empty($model->qty) ? $model->qty : 'N/A';
            }
        ],
        [
            'attribute' => 'accepted_qty',
            'value' => function ($model) {
                return !empty($model->accepted_qty) ? $model->accepted_qty : 'N/A';
            }
        ],

        [
            'attribute' => 'rejected_qty',
            'value' => function ($model) {
                return !empty($model->rejected_qty) ? $model->rejected_qty : 'N/A';
            }
        ],

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

        ],

        [
            'attribute' => 'heat',
            'value' => function ($model) {
                return !empty($model->heat) ? $model->heat : 'N/A';
            }
        ],
        [
            'attribute' => 'lot',
            'value' => function ($model) {
                return !empty($model->lot) ? $model->lot : 'N/A';
            }
        ],

        [
            'attribute' => 'batch_no',
            'value' => function ($model) {
                return !empty($model->batch_no) ? $model->batch_no : 'N/A';
            }
        ],

        [
            'attribute' => 'v_test_no',
            'value' => function ($model) {
                return !empty($model->v_test_no) ? $model->v_test_no : 'N/A';
            }
        ],

        [
            'attribute' => 'date',
            'value' => function ($model) {
                return !empty($model->date) ? $model->date : 'N/A';
            }
        ],
        [
            'attribute' => 'general_condition',
            'value' => function ($model) {
                return !empty($model->general_condition) ? $model->general_condition : 'N/A';
            }
        ],
        [
            'attribute' => 'product_id',
            'value' => function ($model) {
                return !empty($model->product->product_name) ? $model->product->product_name : 'N/A';
            }
        ],

        [
            'attribute' => 'visual_examination',
            'value' => function ($model) {
                return !empty($model->visual_examination) ? $model->visual_examination : 'N/A';
            }
        ],
        [
            'attribute' => 'dimensional_check',
            'value' => function ($model) {
                return !empty($model->dimensional_check) ? $model->dimensional_check : 'N/A';
            }
        ],

        [
            'attribute' => 'product_traceability_mark',
            'value' => function ($model) {
                return !empty($model->product_traceability_mark) ? $model->product_traceability_mark : 'N/A';
            }
        ],

        [
            'attribute' => 'remark:ntext',
            'value' => function ($model) {
                return !empty($model->remark) ? $model->remark : 'N/A';
            }
        ],
        [
            'attribute' => 'inspected_by',
            'value' => function ($model) {
                return !empty($model->inspected_by) ? $model->inspected_by : 'N/A';
            }
        ],
        [
            'attribute' => 'approved_by',
            'value' => function ($model) {
                return !empty($model->approved_by) ? $model->approved_by : 'N/A';
            }
        ],

    ];
    ?>

    <?=
    ExportMenu::widget([
        'dataProvider' => $dataProvider,
        'columns' => $gridColumns,
        'fontAwesome' => true,
        'filename' => 'Order_Conformation_REPORT',
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

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {print}',
                'buttons' => [
                    'print' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-print"></span>', \yii\helpers\Url::to(['print', 'id' => $model->incomming_qc_id]), ['target' => '_blank', 'data-pjax' => "0"]);
                    },
                ],
            ]
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
