<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 8/8/2018
 * Time: 7:25 AM
 */
 ?>

<h1 align="center">Order MFG Tracker</h1>
<table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">
	<tr>
		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<b>Order Number</b>
		</td>
		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<b>Order Type</b>
		</td>
		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
        			<b>Order Date</b>
        		</td>
        		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
        			<b>Expected Date</b>
        		</td>
	</tr>

	<tr>
    		<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
    			<p><?= getExactField($order->order_number) ?></p>
    		</td>
    		<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
    			<p><?= getExactField($order->order_type) ?></p>
    		</td>
    		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            			<p><?= getExactField($order->order_date) ?></p>
            		</td>
            		<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            			<p><?= getExactField($order->expected_date) ?></p>
            		</td>
    	</tr>


	<tr>
    		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
    			<b>Product</b>
    		</td>
    		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
    			<b>Qty</b>
    		</td>
    		<td colspan="2" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            			<center><b>Notes</b></center>
            		</td>
    	</tr>

    	<tr>
            		<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            			<p><?= getExactField($order->product->product_name) ?></p>
            		</td>
            		<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            			<p><?= getExactField($order->qty) ?></p>
            		</td>
            		<td colspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                    			<center><p><?= getExactField($order->notes) ?></p></center>
                    		</td>

            	</tr>

   </table>