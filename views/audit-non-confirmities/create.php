<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AuditNonConfirmities */

$this->title = 'Create Audit Non Confirmities';
$this->params['breadcrumbs'][] = ['label' => 'Audit Non Confirmities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-non-confirmities-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
