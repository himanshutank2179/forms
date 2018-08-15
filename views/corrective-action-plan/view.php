<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CorrectiveActionPlan */

$this->title = 'Corrective Action Plan';
$this->params['breadcrumbs'][] = ['label' => 'Corrective Action Plans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="corrective-action-plan-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->corrective_action_plan_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->corrective_action_plan_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Print', ['print', 'id' => $model->corrective_action_plan_id], ['class' => 'btn btn-primary', 'target' => '_blank',]); ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'corrective_action_plan_id',
            'date',
            [
                'attribute' => 'department_id',

                'value' => function ($data) {
                    return $data->department->name;
                },

            ],
            [
                'attribute' => 'identified_by',

                'value' => function ($data) {
                    return ucfirst($data->identifiedBy->name);
                },

            ],
            [
                'attribute' => 'taken_by',

                'value' => function ($data) {
                    return ucfirst($data->identifiedBy->name);
                },

            ],
            'non_confirmitie:html',
            'non_confirmitie_desc:ntext',
            'result_of_investigation:ntext',

            'c_action_recomand',

            'evidence:ntext',

            'document_change:ntext',
            'correction_effect:ntext',
            'applicable_doc:ntext',
            'management_representative',
        ],
    ]) ?>

</div>
