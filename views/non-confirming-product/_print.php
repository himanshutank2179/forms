<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 8/7/2018
 * Time: 6:11 PM
 */
 ?>

 <h1 align="center">Non Confirming Product</h1>
 <table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">
 	<tr>
 		<td colspan="2" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Date :</b><?= getExactField($nonconfi->date) ?>
 		</td>
 		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Grn no :</b><?= getExactField($nonconfi->GRN_NO) ?>
 		</td>
 		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
         			<b>Product :</b><?= getExactField($nonconfi->product->product_name) ?>
         		</td>
 	</tr>

 	<tr>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
     			<b>Reason</b>
     		</td>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
     			<b>Quantity</b>
     		</td>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             			<b>Balance</b>
             		</td>
            <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                         			<b>Return To Vendor Quantity</b>
                         		</td>
     	</tr>

     	<tr>
             		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             			<p><?= getExactField($nonconfi->resion) ?></p>
             		</td>
             		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             			<p><?= getExactField($nonconfi->qty) ?></p>
             		</td>
             		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                     			<p><?= getExactField($nonconfi->balance) ?></p>
                     		</td>
                    <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                 			<p><?= getExactField($nonconfi->return_to_vendor_qty) ?></p>
                                 		</td>
             	</tr>

     	<tr>
             		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             			<b>Rework Quantity</b>
             		</td>
             		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             			<b>Scrap Quantity</b>
             		</td>
             		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                     			<b>Sales On Discount Quantity</b>
                     		</td>
                    <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                 			<b>Sign Of Prod</b>
                                 		</td>
             	</tr>

        <tr>
                     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                     			<p><?= getExactField($nonconfi->rework_qty) ?></p>
                     		</td>
                     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                     			<p><?= getExactField($nonconfi->scrap_qty) ?></p>
                     		</td>
                     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                             			<p><?= getExactField($nonconfi->sales_on_discount_qty) ?></p>
                             		</td>
                            <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                         			<p><?= getExactField($nonconfi->sign_of_prod) ?></p>
                                         		</td>
                     	</tr>
</table>