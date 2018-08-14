<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 8/8/2018
 * Time: 8:08 AM
 */
 ?>

 <h1 align="center">DND Plan DSN</h1>
 <table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">
 	<tr>
 		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Sr No</b>
 		</td>
 		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Activities To Perform</b>
 		</td>
 		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
         			<b>Responsibility</b>
         		</td>
         		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
         			<b>Resources Required</b>
         		</td>
 	</tr>

    <tr>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
     			  <p><?= getExactField($dnd->sr_no) ?></p>
     		</td>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
     			<p><?= getExactField($dnd->activities_to_perform) ?></p>
     		</td>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             			<p><?= getExactField($dnd->responsibility) ?></p>
             		</td>
             		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             			<p><?= getExactField($dnd->resources_required) ?></p>
             		</td>
     	</tr>


 	<tr>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
     			<b>Person Consulted</b>
     		</td>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
     			<b>Record</b>
     		</td>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             			<b>Activity To Be Reviewed On</b>
             		</td>
             		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             			<b>Actual Dt Of Completion</b>
             		</td>
     	</tr>

        <tr>
             		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             			  <p><?= getExactField($dnd->person_consulted) ?></p>
             		</td>
             		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             			<p><?= getExactField($dnd->record) ?></p>
             		</td>
             		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                     			<p><?= getExactField($dnd->activity_to_be_reviewed_on) ?></p>
                     		</td>
                     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                     			<p><?= getExactField($dnd->actual_dt_of_completion) ?></p>
                     		</td>
             	</tr>

     	<tr>
     	    <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                 			<b>Remarks :</b>
                 		</td>
               <td coslpan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                               	<p><?= getExactField($dnd->remarks) ?></p>
                               		</td>
     	</tr>
     	</table>
