<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 8/7/2018
 * Time: 10:23 PM
 */?>
<h1 align="center">Raw Materials MFG</h1>
<table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">
	<tr>
		<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<b>Product</b>	
		</td>
		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<b>Starting Inventory</b>
		</td>
		<td   style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<b>Re Order Point</b>	
		</td>
		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<b>Purchases</b>
		</td>
		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<b>Available Now</b>	
		</td>
		<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<b>To Order</b>
		</td>
	</tr>

	<tr>
	    <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
        			 <p><?= getExactField($rawmfg->product->product_name) ?></p>
        		</td>
       <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
       			<p><?= getExactField($rawmfg->starting_inventory) ?></p>
       		</td>
       <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
       			<p><?= getExactField($rawmfg->re_order_point) ?></p>
       		</td>
       <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
       			<p><?= getExactField($rawmfg->purchases) ?></p>
       		</td>
       <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
       			<p><?= getExactField($rawmfg->available_now) ?></p>
       		</td>
       	<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
        			<p><?= getExactField($rawmfg->to_order) ?></p>
        		</td>
	</tr>
</table>