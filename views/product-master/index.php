<?php

use kartik\export\ExportMenu;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductMasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::$app->getRequest()->getQueryParam('type') == null ? 'Product Masters' : 'Purchase Masters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-master-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php $filename = 'product_master'; ?>
    <p>
        <?php if (Yii::$app->getRequest()->getQueryParam('type') == 'purchase'): ?>
            <?php $filename = 'purchase_master'; ?>
            <?= Html::a('Create Purchase Product', ['create?type=purchase'], ['class' => 'btn btn-success']) ?>
        <?php else: ?>
            <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
        <?php endif; ?>
    </p>


    <?php
    $gridColumns = [
        'product_name',
        'product_code',
        'generic_name',
        'model',
        'sku',
        'bill_of_material',
    ];
    ?>

    <?=
    ExportMenu::widget([
        'dataProvider' => $dataProvider,
        'columns' => $gridColumns,
        'fontAwesome' => true,
        'filename' => $filename,
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

            /*'product_master_id',*/
            'product_name',
            'product_code',
            'generic_name',
            'model',
            'sku',

            //'bill_of_material',
            //'is_purchase',
            //'is_deleted',
            //'created_at',

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{update}{delete}{print}',
                'buttons' => [
                    'update' => function ($url, $model) {
                        if (Yii::$app->getRequest()->getQueryParam('type') == 'purchase'):
                            $newUrl = \yii\helpers\Url::to(['update', 'id' => $model->product_master_id, 'type' => 'purchase'],true);
                        else:
                            $newUrl = \yii\helpers\Url::to(['update', 'id' => $model->product_master_id, 'type' => 'product'],true);
                        endif;
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $newUrl, [
                            'title' => Yii::t('app', 'Update'),
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        if (Yii::$app->getRequest()->getQueryParam('type') == 'purchase'):
                            $newUrl = \yii\helpers\Url::to(['delete', 'id' => $model->product_master_id, 'type' => 'purchase'],true);
                        else:
                            $newUrl = \yii\helpers\Url::to(['delete', 'id' => $model->product_master_id, 'type' => 'product'],true);
                        endif;

                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', $newUrl, [
                            'title' => Yii::t('app', 'Delete'),'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                        ]);
                    },
                    'print' => function ($url, $model) {
                            return Html::a('<span class="glyphicon glyphicon-print"></span>', \yii\helpers\Url::to(['print', 'id' => $model->product_master_id]), ['target' => '_blank', 'data-pjax' => "0"]);
                        },


                ],
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
