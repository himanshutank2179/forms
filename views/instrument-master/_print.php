<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 8/7/2018
 * Time: 4:15 PM
 */
 ?>

<h1 align="center">Instrument Master</h1>
 <table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">
 	<tr>
 		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Name of Instrument</b>
 		</td>
 		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Instrument Identification No</b>
 		</td>
 		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
         			<b>Make And Sr No</b>
         </td>
         <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
          			<b>Capacity</b>
          </td>
          <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                    	<b>Least Count</b>
           </td>
 	</tr>

 	<tr>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
     			<p><?= getExactField($instrument->name_of_instrument) ?></p>
     		</td>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
     			<p><?= getExactField($instrument->instrument_identification_no) ?></p>
     		</td>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             			<p><?= getExactField($instrument->make_and_sr_no) ?></p>
             </td>
             <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
              			<p><?= getExactField($instrument->capacity) ?></p>
              </td>
              <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                        	<p><?= getExactField($instrument->least_count) ?></p>
               </td>
     	</tr>

 	<<tr>
      		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
      			<b>Acceptance Criteria</b>
      		</td>
      		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
      			<b>Calibration Certi No</b>
      		</td>
      		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
              			<b>Date</b>
              </td>
              <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
               			<b>Next Due On</b>
               </td>
               <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                       	<b>Sign Qc</b>
                </td>
      	</tr>

      		<tr>
             		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             			<p><?= getExactField($instrument->acceptance_criteria) ?></p>
             		</td>
             		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             			<p><?= getExactField($instrument->calibration_certi_no) ?></p>
             		</td>
             		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                     			<p><?= getExactField($instrument->date) ?></p>
                     </td>
                     <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                      			<p><?= getExactField($instrument->next_due_on) ?></p>
                      </td>
                      <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                	<p><?= getExactField($instrument->sign_qc) ?></p>
                       </td>
             	</tr>

 	</table>