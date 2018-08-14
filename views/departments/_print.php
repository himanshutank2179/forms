<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 8/7/2018
 * Time: 4:35 PM
 */
 ?>

 <h1 align="center">Departments</h1>
  <table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">
  	<tr>
  		<td width="20%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
  			<b>Name</b>
  		</td>
  		<td width="80%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
  			<p><?= getExactField($depart->name) ?></p>
  		</td>
  	</tr>
  	</table>