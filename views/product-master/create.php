<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ProductMaster */
 if (Yii::$app->getRequest()->getQueryParam('type') == 'purchase'):
     $this->title = 'Create Raw Material';
else:
    $this->title = 'Create Product';
endif;

$this->params['breadcrumbs'][] = ['label' => Yii::$app->getRequest()->getQueryParam('type') == 'purchase' ? 'Purchase Masters' : 'Product Masters',
    'url' => Yii::$app->getRequest()->getQueryParam('type') == 'purchase' ? ['index?type=purchase'] : ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-master-create">

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