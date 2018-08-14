<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 8/8/2018
 * Time: 7:41 AM
 */?>

 <h2 align="center">Inspection & Testing Quality Plan One</h2>
 <table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">
 	<tr>
 		<td width="20%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Product</b>
 		</td>
 		<td width="20%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Parameter</b>
 		</td>
 		<td width="20%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
         			<b>Sampling Plan</b>
         		</td>
         		<td width="20%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
         			<b>Record</b>
         		</td>
        <td width="20%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                 			<b>Resposi Ability</b>
                 		</td>
 	</tr>

 	<tr>
         		<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
         			<p><?= getExactField($onepln->product->product_name) ?></p>
         		</td>
         		<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
         			<p><?= getExactField($onepln->parameter) ?></p>
         		</td>
         		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                 			<p><?= getExactField($onepln->sampling_plan) ?></p>
                 		</td>
                 		<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                 			<p><?= getExactField($onepln->record) ?></p>
                 		</td>
                <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                         			<p><?= getExactField($onepln->resposi_ability) ?></p>
                         		</td>
         	</tr>
</table>