<?php

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

    <p>
        <?php if (Yii::$app->getRequest()->getQueryParam('type') == 'purchase'): ?>
            <?= Html::a('Create Purchase Product', ['create?type=purchase'], ['class' => 'btn btn-success']) ?>
        <?php else: ?>
            <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
        <?php endif; ?>
    </p>

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
                'template' => '{update}{delete}',
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
                    }

                ],
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>