<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ItqtTwoPlanner */

$this->title = 'Create Itqt Two Planner';
$this->params['breadcrumbs'][] = ['label' => 'Itqt Two Planners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itqt-two-planner-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<?php
$this->registerJs("
/*window.onbeforeunload = function() {
var Ans = confirm('Are you sure you want change page!');
if(Ans==true)
return true;
else
return false;
};*/
", \yii\web\View::POS_END);
?>