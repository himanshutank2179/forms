<?php

use app\helpers\AppHelper;
use yii\helpers\Html;

yii\bootstrap\Modal::begin([
    'header' => '<h3>Please Select Your Company</h3>',
    'id' => 'set-company',


]);

?>
<div class="modalContent">
    <?= Html::dropDownList('123', '', AppHelper::getCompanies(), ['class' => 'form-control', 'prompt' => 'Please Select', 'id' => 'select-company']) ?>
</div>
<?php
yii\bootstrap\Modal::end();
?>

