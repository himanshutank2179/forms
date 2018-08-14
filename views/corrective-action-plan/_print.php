<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 8/7/2018
 * Time: 6:35 PM
 */
 ?>
 <h1 align="center">Corrective Action Plan</h1>
 <table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">
 	<tr>
 		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Date</b>
 		</td>
 		<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Department</b>
 		</td>
 		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
         			<b>Identified By</b>
         		</td>
         		<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
         			<b>Taken By</b>
         		</td>
         	</tr>

         	<tr>
             		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             			<p><?= getExactField($action->date) ?></p>
             		</td>
             		<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             			<p><?= getExactField($action->department->name) ?></p>
             		</td>
             		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                     		<p><?= getExactField($action->identified_by) ?></p>
                     </td>
                     <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                     		<p><?= getExactField($action->taken_by) ?></p>
                     </td>
            </tr>

         	<tr>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
         			<b>Nonconformity Identified During</b>
         		</td>
         		<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
         			<b>Description of Non conformity</b>
         		</td>
         	<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                     			<b>Root Cause of Non-conformitiy (Result of Investigation)</b>
                     		</td>
                     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                     			<b>C-Action Recommended/b>
                     		</td>
 	</tr>

    <tr>
                 	<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                 			<p><?= getExactField($action->non_confirmitie) ?></p>
                 		</td>
                 		<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                 			<p><?= getExactField($action->non_confirmitie_desc) ?></p>
                 		</td>
                 		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                         		<p><?= getExactField($action->result_of_investigation) ?></p>
                         </td>
                         <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                         		<p><?= getExactField($action->c_action_recomand) ?></p>
                         </td>
                </tr>

 	<tr>
            <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             			<b>C-Action Taken(Evidence)</b>
             		</td>
             		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             			<b>Review Effectiveness of Corrective & Preventive Action Taken</b>
             		</td>
             	<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                         			<b>Applicable Documentation	</b>
                         		</td>
                         		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                         			<b>Management Representative/b>
                         		</td>
     	</tr>

            <tr>
                                <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                        <p><?= getExactField($action->evidence) ?></p>
                                    </td>
                                    <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                        <p><?= getExactField($action->correction_effect) ?></p>
                                    </td>
                                    <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                            <p><?= getExactField($action->applicable_doc) ?></p>
                                     </td>
                                     <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                            <p><?= getExactField($action->management_representative) ?></p>
                                     </td>
                            </tr>

     	<tr>
                    <td colspan="5" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                     			<b>Summary of Any Preventive Action Taken / Document Change etc. :</b><?= getExactField($action->document_change) ?>
                     		</td>
                     	</tr>
</table>