<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Testcat */

$this->title = 'Create Testcat';
$this->params['breadcrumbs'][] = ['label' => 'Testcats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testcat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
