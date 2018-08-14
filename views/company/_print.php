<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 8/7/2018
 * Time: 3:25 PM
 */
 ?>

 <h1 align="center">Company Profile</h1>
 <table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">
 	<tr>
 		<td rowspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Image</b>
 		</td>
 		<td colspan="2" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Company Name :</b>
 		</td>
 		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
         			<b>Email :</b>
         </td>
 	</tr>

 	<tr>
     		<td colspan="2" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
     			<?= getExactField($company->name) ?>
     		</td>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             	<?= getExactField($company->email) ?>
             </td>
     	</tr>

 	<tr>
 		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Mobile No</b>
 		</td>
 		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             <b>Account No</b>
 		</td>
 		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
         			<b>Bank IFSC</b>
        </td>
        <td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                     <b>GSTIN</b>
        </td>
 	</tr>

 	<tr>
     		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                   <p><?= getExactField($company->contact_person_no) ?></p>
     		</td>
     		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                <p><?= getExactField($company->account_number) ?></p>
     		</td>
     		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                    <p><?= getExactField($company->bank_ifsc) ?></p>
            </td>
            <td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                    <p><?= getExactField($company->gstin) ?></p>
            </td>
     	</tr>


 	<tr>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
     			<b>Pancard no</b>
     		</td>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                 <b>Flat</b>
     		</td>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
             			<b>Street</b>
            </td>
            <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                         <b>Landmark</b>
            </td>
     </tr>

    <tr>
         		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                       <p><?= getExactField($company->pan) ?></p>
         		</td>
         		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                    <p><?= getExactField($company->flat) ?></p>
         		</td>
         		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                        <p><?= getExactField($company->	street) ?></p>
                </td>
                <td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                        <p><?= getExactField($company->gstin) ?></p>
                </td>
         	</tr>

    	<tr>
         		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
         			<b>Area</b>
         		</td>
         		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                     <b>City</b>
         		</td>
         		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                 			<b>State</b>
                </td>
                <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                             <b>Country</b>
                </td>
         </tr>


         <tr>
                  		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                <p><?= getExactField($company->area) ?></p>
                  		</td>
                  		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                             <p><?= getExactField($company->city->name) ?></p>
                  		</td>
                  		<td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                 <p><?= getExactField($company->state->name) ?></p>
                         </td>
                         <td width="25%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                 <p><?= getExactField($company->country->name) ?></p>
                         </td>
                  	</tr>


 </table>