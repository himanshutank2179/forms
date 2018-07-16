<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Help */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Helps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="help-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?php Html::a('Update', ['update', 'id' => $model->help_id], ['class' => 'btn btn-primary']) ?>
        <?php Html::a('Delete', ['delete', 'id' => $model->help_id], [
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
            /*'help_id',*/

            /*[
                'attribute'=>'title',
                'label'=>false
            ],*/
            [
                'attribute'=>'description',
                'label'=>false,
                'format'=>'raw',
                'value'=>function($data){
                    return $data->description;
                }
            ],

        ],
    ]) ?>

</div>
