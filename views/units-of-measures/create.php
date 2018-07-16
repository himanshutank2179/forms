<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UnitsOfMeasures */

$this->title = 'Create Units Of Measures';
$this->params['breadcrumbs'][] = ['label' => 'Units Of Measures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="units-of-measures-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
