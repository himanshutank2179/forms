<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\VendorsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vendors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendors-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Vendors', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'vendor_id',*/
            'name',

            [
                'attribute' => 'photo',
                'format' => 'raw',
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web') . '/uploads/' . $data['photo'], ['width' => '200px', 'class' => 'img-thumbnail set-profile-' . $data->vendor_id]);
                },
                'filter' => false
            ],
            'email:email',
            //'phone',
            //'address:ntext',
            //'office_address:ntext',
            //'contact_person_name',
            //'created_at',
            //'is_deleted',
            //'website',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>