<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AuditElements */

$this->title = 'Create Audit Elements';
$this->params['breadcrumbs'][] = ['label' => 'Audit Elements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-elements-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
