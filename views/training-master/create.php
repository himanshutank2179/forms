<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TrainingMaster */

$this->title = 'Create Training Master';
$this->params['breadcrumbs'][] = ['label' => 'Training Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="training-master-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
