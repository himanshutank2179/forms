<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DocumentsAndDistributionMaster */

$this->title = $model->name_of_document;
$this->params['breadcrumbs'][] = ['label' => 'Documents And Distribution Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="documents-and-distribution-master-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php Html::a('Update', ['update', 'id' => $model->documents_and_distribution_master_id], ['class' => 'btn btn-primary']) ?>
        <?php Html::a('Delete', ['delete', 'id' => $model->documents_and_distribution_master_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            /*'documents_and_distribution_master_id',*/
            'name_of_document',
            'document_no',
            'issue_no',
            'revision',
            'date_of_issue',
            'copy_holders_department',
            'sign_of_receiver',

            [
                'attribute' => 'is_international',
                'value' => function ($model) {
                    return $model->is_international == 1 ? 'YES' : 'No';
                }
            ]
            /*'is_deleted',
            'created_at'*/
        ],
    ]) ?>


    <h3>Documents</h3>
    <div class="row">
        <?php foreach ($files as $file): ?>
        <div class="col-md-3">
            <img src="<?= Yii::$app->urlManager->createAbsoluteUrl('uploads/'.$file->image) ?>" alt="" class="img-thumbnail img-responsive">
        </div>
        <?php endforeach; ?>
    </div>



</div>
