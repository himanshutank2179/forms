<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\VendorMobile;

/* @var $this yii\web\View */
/* @var $model app\models\Vendors */

$all_mobiles = VendorMobile::find()->where(['vendor_id' => $model->vendor_id])->all();

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Vendors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendors-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->vendor_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->vendor_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'vendor_id',
            'name',
            // 'photo',
            'email:email',
            'phone',
            'address:ntext',
            'office_address:ntext',
            'contact_person_name',
            [
                'attribute' => 'city_id',

                'value' => function ($data) {
                    return $data->city->name;
                },


            ],
            [
                'attribute' => 'state_id',

                'value' => function ($data) {
                    return $data->state->name;
                },


            ],
            [
                'attribute' => 'country_id',

                'value' => function ($data) {
                    return $data->country->name;
                },


            ],
            'account_number',
            'bank_ifsc',
            'gstin',
            'pan',
            'street',
            'flat',
            //'is_deleted',
            'website',
            'created_at',
        ],
    ]) ?>

</div>
<div class="row">
    <div class="col-md-6">
        <table id="w0" class="table table-striped table-bordered detail-view" >
            <tbody>
                <?php foreach ($all_mobiles as $mobile): ?>
                <tr>
                    <th>Mobile</th>
                    <td><?= $mobile->vendor_mobile  ?></td>
                </tr>
                <?php endforeach; ?>    
            </tbody>    
        </table>
    </div>
</div>


