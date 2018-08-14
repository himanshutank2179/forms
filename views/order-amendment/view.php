<?php

use app\models\OrderAmendmentProducts;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\OrderAmendment */

$this->title = 'Order Amendment';
$this->params['breadcrumbs'][] = ['label' => 'Order Amendments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-amendment-view">

    <h3>Order Amendment</h3>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->order_amendment_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->order_amendment_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Print', ['print', 'id' => $model->order_amendment_id], ['class' => 'btn btn-primary', 'target' => '_blank',]); ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            /*'order_amendment_id',*/
            'purchase_order_no',
            'date',
            'quotation_ref_no',
            'revised_terms:ntext',
            'total',
            'delivery_period',
            'delivery_required_at',
            'made_of_dispatch',
            'payment_terms:ntext',
            'insurance',
            'inspected_by',
            'approved_by',
            // 'is_deleted',
            'created_at',
        ],
    ]) ?>

    <br><br>

    <table id="common-data-table" class="display">
        <thead>
        <tr>
            <th>Product</th>
            <th>Revised Description</th>
            <th>Quantity</th>
            <th>Rate Per Unit</th>
            <th>Total Amount</th>
        </tr>
        </thead>
        <tbody>
        <?php $products = OrderAmendmentProducts::find()->where(['order_amendment_id' => $model->order_amendment_id])->all(); ?>
        <?php foreach ($products as $project): ?>
        <tr>
            <td><?= $project->product->product_name; ?></td>
            <td><?= $project->reviced_desc; ?></td>
            <td><?= $project->quantity; ?></td>
            <td><?= $project->rate_per_unit; ?></td>
            <td><?= $project->total_amount; ?></td>
        </tr>

        <?php endforeach; ?>

        </tbody>
    </table>

</div>

<?php

$this->registerJs("
  $('#common-data-table').DataTable();
  
  
  
  setTimeout(()=>{ 
    $('input[type=search]').addClass('form-control'); 
    
  },1000);
  
", \yii\web\View::POS_END);
?>
