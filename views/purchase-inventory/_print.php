<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 8/7/2018
 * Time: 5:51 PM
 */
 ?>

 <h1 align="center">Purchase Inventory</h1>
 <table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">
 	<tr>
 		<td width="20%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Product</b>
 		</td>
 		<td width="20%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Initial Quantity</b>
 		</td>
 		<td width="20%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
         			<b>Current Quantity</b>
         		</td>
         		<td width="20%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
         			<b>Unit Price</b>
         		</td>
        <td width="20%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                 			<b>Note</b>
                 		</td>
 	</tr>

 	<tr>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
     			 <p><?= getExactField($purchase->product_id) ?></p>
     		</td>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
     			 <p><?= getExactField($purchase->initial_qty) ?></p>
     		</td>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             			 <p><?= getExactField($purchase->current_qty) ?></p>
             		</td>
             		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             			 <p><?= getExactField($purchase->unit_price) ?></p>
             		</td>
            <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                     		 <p><?= getExactField($purchase->note) ?></p>
                     		</td>
     	</tr>

 	</table>