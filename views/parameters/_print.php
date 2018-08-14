<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 8/7/2018
 * Time: 4:02 PM
 */
 ?>

 <h1 align="center">Parameters</h1>
 <table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">
 	<tr>
 		<td width="40%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Name</b>
 		</td>
 		<td width="20%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Value</b>
 		</td>
 		<td width="20%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
         			<b>Tolerance</b>
         		</td>
         		<td width="20%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
         			<b>Unit</b>
         		</td>
 	</tr>


 	<tr>
    		<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                    <p><?= getExactField($para->name) ?></p>
    		</td>
    		<td tyle=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                <p><?= getExactField($para->value) ?></p>
    		</td>
    		<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                <p><?= getExactField($para->tolerance) ?></p>
                		</td>
                		<td tyle=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                            <p><?= getExactField($para->unit) ?></p>
                		</td>
    	</tr>
 	</table>
