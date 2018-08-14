<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 8/7/2018
 * Time: 5:59 PM
 */
 ?>

 <h1 align="center">Purchase Inventory</h1>
  <table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left; font-size:12pt">
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
          <td width="20%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                            			<b>Minimum Quantity</b>
                            		</td>
  	</tr>

  	<tr>
      		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
      			 <p><?= getExactField($product->product_id) ?></p>
      		</td>
      		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
      			<p><?= getExactField($product->initial_qty) ?></p>
      		</td>
      		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
              			<p><?= getExactField($product->current_qty) ?></p>
              		</td>
              		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
              			 <p><?= getExactField($product->unit_price) ?></p>
              		</td>
             <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                      		 <p><?= getExactField($product->note) ?></p>
                      		</td>
             <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                   		 <p><?= getExactField($product->min_qty) ?></p>
                                   		</td>
      	</tr>

  	</table>