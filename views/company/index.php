<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CompanySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Companies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Company', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'company_id',*/

            [
                'attribute' => 'image',
                'format' => 'raw',
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web') . '/uploads/' . $data['image'], ['width' => '200px', 'class' => 'img-thumbnail']);
                },
                'filter' => false
            ],
            'name',
            'email:email',
            'contact_person_no',
            'account_number',

            //'bank_ifsc',
            //'gstin',
            //'pan',
            //'flat',
            //'street',
            //'landmark',
            //'area',
            //'city_id',
            //'state_id',
            //'country_id',
            //'is_deleted',
            //'created_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {print}',
                'buttons' => [
                    'print' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-print"></span>', \yii\helpers\Url::to(['print', 'id' => $model->company_id]), ['target' => '_blank', 'data-pjax' => "0"]);
                    },
                ],
            ]
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
