<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 8/7/2018
 * Time: 4:42 PM
 */
 ?>
 <h1 align="center">Responsibility</h1>
    <table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">
    	<tr>
    		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
    			<b>Name of Document</b>
    		</td>
    		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                <b>Document no</b>
    		</td>
    		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                	<b>Issue no</b>
              </td>
               <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                      <b>Revision</b>
               </td>
    	</tr>

    	<tr>
            		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            			 <p><?= getExactField($document->name_of_document) ?></p>
            		</td>
            		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                        <p><?= getExactField($document->document_no) ?></p>
            		</td>
            		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                        	<p><?= getExactField($document->issue_no) ?></p>
                      </td>
                       <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                              <p><?= getExactField($document->revision) ?></p>
                       </td>
            	</tr>

    	<tr>
            		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            			<b>Date of issue</b>
            		</td>
            		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                        <b>Copy Holder's Department</b>
            		</td>
            		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                        			<b>Sign Of Receiver</b>
                        		</td>
                        		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                    <b>Is International</b>
                        		</td>
            	</tr>

          <tr>
                      		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                      			 <p><?= getExactField($document->date_of_issue) ?></p>
                      		</td>
                      		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                  <p><?= getExactField($document->copy_holders_department) ?></p>
                      		</td>
                      		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                  	<p><?= getExactField($document->sign_of_receiver) ?></p>
                                </td>
                                 <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                                        <p><?= getExactField($document->is_international) ?></p>
                                 </td>
                      	</tr>
   </table>