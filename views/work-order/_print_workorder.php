<?php
use app\models\WorkOrderProducts
?>
<table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">
	<tr>
		<td rowspan="2" colspan="5" width="65%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<b>Product Work Order</b>
		</td>
		<td colspan="4" width="35%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<p>Work Order No:-</p>
			<p><?= getExactField($workorder->work_order_id) ?></p>
		</td>
	</tr>
	<tr>
		<td colspan="4" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<p>Date:</p>
			<p><?= getExactField($workorder->date) ?></p>
		</td>
	</tr>
	<tr>
		<td colspan="5" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<p>Name Of Customer & Address: Finish goods Store</p>
			<p><?= getExactField($workorder->client->name) ?></p>
			<p><?= getExactField($workorder->client->flat)." &nbsp; ".getExactField($workorder->client->street)." &nbsp; ".getExactField($workorder->client->landmark)." &nbsp; ".getExactField($workorder->client->area)." &nbsp; ".getExactField($workorder->client->city)." &nbsp; ".getExactField($workorder->client->state)." &nbsp; ".getExactField($workorder->client->country) ?></p>
		</td>
		<td colspan="4" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<p>Production Monitoring</p>
			<p><?= getExactField($workorder->production_monitoring) ?></p>
		</td>
	</tr>
	<tr>
		<td width="7%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;" class="text-center">
			Sr.No
		</td>
		<td width="23%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;" class="text-center">
			Product Description
		</td>
		<td width="15%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;" class="text-center">
			Drawing No
		</td>
		<td width="10%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;" class="text-center">
			Reqd.Qty
		</td>
		<td width="10%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;" class="text-center">
			Delivery Reqd.On
		</td>
		<td width="9%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;" class="text-center">
			Job Card No.
		</td>
		<td width="8%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;" class="text-center">
			Actual Qty.
		</td>
		<td width="8%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;" class="text-center">
			Sr.No.
		</td>
		<td width="10%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;" class="text-center">
			Pending
		</td>
	</tr>
	<?php
        $WorkOrderProducts = WorkOrderProducts::find()->where(['work_order_id'=>$workorder->work_order_id])->all();
    ?>
    <?php foreach ($WorkOrderProducts as $key => $product): ?>
	<tr>
		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;" class="text-center"><?= getExactField($product->work_order_product_id) ?></td>
		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;" class="text-center"><?= getExactField($product->product->product_name) ?></td>
		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;" class="text-center"><?= getExactField($product->drawing_no) ?></td>
		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;" class="text-center"><?= getExactField($product->required_qty) ?></td>
		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;" class="text-center"><?= getExactField($product->delivery_required_at) ?></td>
		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;" class="text-center"><?= getExactField($product->job_card_no) ?></td>
		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;" class="text-center"><?= getExactField($product->actual_qty) ?></td>
		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;" class="text-center"><?= getExactField($product->work_order_product_id) ?></td>
		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;" class="text-center"><?= getExactField($product->pending) ?></td>
	</tr>
	<?php endforeach; ?>

	<tr>
		<td colspan="9" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			Reviewed and Approved by: <?= getExactField($workorder->approved_by)?>
		</td>
	</tr>


</table>