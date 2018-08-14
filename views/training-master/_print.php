<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 8/7/2018
 * Time: 4:53 PM
 */
 ?>

 <h1 align="center">Training Master</h1>
 <table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">
 	<tr>
 		<td width="30%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Name of Training</b>
 		</td>
 		<td  width="70%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
 			<b>Period</b>
 		</td>
 	</tr>
 	<tr>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
     			<p><?= getExactField($training->name_of_training) ?></p>
     		</td>
     		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
     			<p><?= getExactField($training->period) ?></p>
     		</td>
     	</tr>
 	</table>