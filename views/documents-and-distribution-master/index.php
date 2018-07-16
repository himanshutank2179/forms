    <?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DocumentsAndDistributionMasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Documents And Distribution Masters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="documents-and-distribution-master-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Documents And Distribution Master', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'documents_and_distribution_master_id',*/
            'name_of_document',
            'document_no',
            'issue_no',
            'revision',

            //'date_of_issue',
            //'copy_holders_department',
            //'sign_of_receiver',
            //'is_international',
            //'is_deleted',
            //'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>



<?php
$this->registerJs("

/*$(function() {
    $(this).bind('contextmenu', function(e) {
        e.preventDefault();
    });
});
$('img').on('dragstart', function(event) { event.preventDefault(); });*/

", \yii\web\View::POS_END);
    ?>



