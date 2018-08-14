<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 8/7/2018
 * Time: 10:03 PM
 */
 ?>
 <h1 align="center">Product MFG Tracker</h1>
 <table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">
 	<tr>
 		<td width="70%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Product</b>
 		</td>
 		<td width="30%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Qty</b>
 		</td>
 	</tr>
 	<tr>
     		<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
     			 <p><?= getExactField($mfg->product->product_name) ?></p>
     		</td>
     		<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
     			 <p><?= getExactField($mfg->qty) ?></p>
     		</td>
     	</tr>
</table>