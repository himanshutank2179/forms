<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ItqtOnePlanner */

$this->title = 'Create Inspection & Testing Quality Plan One Planner';
$this->params['breadcrumbs'][] = ['label' => 'Itqt One Planners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itqt-one-planner-create">

    <h3><?= Html::encode($this->title) ?></h3>

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