<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 8/7/2018
 * Time: 5:26 PM
 */?>

 <h1 align="center">Incomming Qc</h1>
 <table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left; font-size:15pt">
 	<tr>
 		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Manufacturer :</b><?= getExactField($qc->manufacturer) ?>
 		</td>
 		<td colspan="2" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Label Particulars :</b><?= getExactField($qc->label_particulars) ?>
 		</td>
 		<td colspan="2" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
         			<b>Manufacturing Date :</b><?= getExactField($qc->mfg_date) ?>
         		</td>

 	</tr>

    <tr>
        <td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                 			<b>Heat</b>
                 		</td>
          <td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                	<b>Lot</b>
           </td>
           <td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                			<b>Batch No</b>
                		</td>
                		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                			<b>Vendor Test No</b>
                		</td>
                		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                        			<b>Date</b>
                        		</td>
    </tr>

      <tr>
            <td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                     			<p><?= getExactField($qc->heat) ?></p>
                     		</td>
              <td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                    	<p><?= getExactField($qc->lot) ?></p>
               </td>
               <td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                    			<p><?= getExactField($qc->batch_no) ?></p>
                    		</td>
                    		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                    			<p><?= getExactField($qc->v_test_no) ?></p>
                    		</td>
                    		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                            			<p><?= getExactField($qc->date) ?></p>
                            		</td>
        </tr>

 	<tr>

             		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             			<b>Product</b>
             		</td>
             		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                             		<b>Quantity</b>
                		</td>
                     <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                        	<b>Remark</b>
                            </td>
                        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                			<b>Inspected By</b>
                 		</td>
                 		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                                        			<b>Approved By</b>
                      		</td>
     	</tr>

          <tr>
                    <td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                             			<p><?= getExactField($qc->product_id) ?></p>
                             		</td>
                      <td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                            	<p><?= getExactField($qc->qty) ?></p>
                       </td>
                       <td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                            			<p><?= getExactField($qc->remark) ?></p>
                            		</td>
                            		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                            			<p><?= getExactField($qc->inspected_by) ?></p>
                            		</td>
                            		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                    			<p><?= getExactField($qc->approved_by) ?></p>
                                    		</td>
                </tr>

 </table>