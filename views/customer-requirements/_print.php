<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 8/7/2018
 * Time: 3:01 PM
 */
 ?>
 <h1 align="center">Customer Requirements</h1>
 <table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">
 	<tr>
 		<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Client Id :</b><?= getExactField($customer->client_id) ?>
 			 		</td>

 		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Date :</b><?= getExactField($customer->date) ?>
 			 		</td>

 		<td colspan="2" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
         	<b>Invoice Number :</b><?= getExactField($customer->invoice_number) ?>
         	         </td>
 	</tr>

 	<tr>
 		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                    <b>Address</b>
                 </td>
          	<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                      <b>Product Info</b>
                 </td>
                 <td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                  	   <b>Quatation</b>
                  </td>
        <td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                   <b>Quatation Ref</b>
           </td>
 	</tr>

    <tr>
     		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                            <p><?= getExactField($customer->address) ?></p>
                     </td>
              	<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                            <p><?= getExactField($customer->product_info) ?></p>
                     </td>
                     <td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                            <p><?= getExactField($customer->quatation) ?></p>
                      </td>
            <td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                        <p><?= getExactField($customer->quatation_ref) ?></p>
               </td>
     	</tr>

 	<tr>
 		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                    <b>Customer Number</b>
                 </td>
          	<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                      <b>Order Review By</b>
                 </td>
                 <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                  	   <b>Date of Dispatch</b>
                  </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                   <b>Item</b>
           </td>
 	</tr>

 	<tr>
         		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                <p><?= getExactField($customer->customer_po_number) ?></p>
                         </td>
                  	<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                <p><?= getExactField($customer->order_review_by) ?></p>
                         </td>
                         <td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                <p><?= getExactField($customer->date_of_dispatch) ?></p>
                          </td>
                <td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                            <p><?= getExactField($customer->item) ?></p>
                   </td>
         	</tr>


 </table>