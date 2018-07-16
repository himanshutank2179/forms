<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OperationMaster */

$this->title = 'Create Operation Master';
$this->params['breadcrumbs'][] = ['label' => 'Operation Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operation-master-create">

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