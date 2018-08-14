<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 8/7/2018
 * Time: 5:09 PM
 */?>



 <h1 align="center">Raw Material Receipts</h1>
 <table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">
    <tr>
        <td colspan="4" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
         			<b>GRN NO :</b><?= getExactField($receipt->GRN_NO) ?>
         		</td>
    </tr>
 	<tr>

 		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Product</b>
 		</td>
 		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
         			<b>Unit</b>
         		</td>
         		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
         			<b>Receive Quantity</b>
         		</td>
                       <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                     			<b>Rejected Quantity</b>
                                	</td>

 	</tr>

 	<tr>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
     			<p><?= getExactField($receipt->product_id) ?></p>
     		</td>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                 			<p><?= getExactField($receipt->unit) ?></p>
             </td>
             <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                  			<p><?= getExactField($receipt->receive_qty) ?></p>
             </td>
             <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                  			<p><?= getExactField($receipt->rejected_qty) ?></p>
                  		</td>
     	</tr>

    <tr>

     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
     			<b>Accepted Quantity</b>
     		</td>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
     			<b>Unit Price</b>
     		</td>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             			<b>Order No</b>
             		</td>
            <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                     			<b>CGST</b>
                                     		</td>
         	</tr>

<tr>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
     			<p><?= getExactField($receipt->accepted_qty) ?></p>
     		</td>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                 			<p><?= getExactField($receipt->unit_price) ?></p>
             </td>
             <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                  			<p><?= getExactField($receipt->order_no) ?></p>
             </td>
             <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                  			<p><?= getExactField($receipt->	cgst) ?></p>
                  		</td>
     	</tr>

         	<tr>
            <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                           	<b>SGST</b>
               </td>
           <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                        			<b>IGST</b>
                </td>
                <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                               			<b>Total Amount</b>
                </td>
               <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                            	<b>Remark</b>
                 </td>
         	</tr>

         	<tr>
                 		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                 			<p><?= getExactField($receipt->sgst) ?></p>
                 		</td>
                 		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                             			<p><?= getExactField($receipt->igst) ?></p>
                         </td>
                         <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                              			<p><?= getExactField($receipt->total_amount) ?></p>
                         </td>
                         <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                              			<p><?= getExactField($receipt->remark) ?></p>
                              		</td>
                 	</tr>


</table>