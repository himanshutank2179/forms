<?php
// use app\models\JobcardOperationParameter;
?>
<?php // getExactField($complaints->); ?>
<h3 class="text-center">NISHA VALVES (INDIA) LTD</h3>
<div class="text-center">Naroda Road Ahmedabad-382345</div>
<h4 class="text-center">CUSTOMER COMPLAINTS REPORT</h4>
<table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">
<tbody>
<tr>
<td colspan="7" width="70%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p>Complaint Rgtd. No.:<?= getExactField($complaints->customer_compaint_report_id); ?></p>
</td>
<td colspan="3" width="30%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p>Date:<?= getExactField($complaints->date); ?></p>
</td>
</tr>
<tr>
<td colspan="7"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p>Date of Receipt of Compliant:</p>
<p><?= getExactField(date($complaints->date_of_receipt_of_compliant)); ?></p>
</td>
<td colspan="3" rowspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p>Received By:</p>
<p><?= getExactField($complaints->received_by); ?></p>
</td>
</tr>
<tr>
<td colspan="7"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p>Mode of Receipt:</p>
<p><?= getExactField($complaints->made_of_receipt); ?></p>
</td>
</tr>
<tr>
<td colspan="10"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p><strong><em>Customer Name:</em></strong></p>
<p><?= getExactField($complaints->client->name); ?></p>
</td>
</tr>
<tr>
<td colspan="10"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p><strong><em>Details of Product</em></strong></p>
</td>
</tr>
<tr>
<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p><strong><em>Name of Product </em></strong><strong><em>&agrave;</em></strong></p>
</td>
<td colspan="5"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p><?= getExactField($complaints->product->product_name); ?></p>
</td>
<td colspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p><strong><em>Code No.</em></strong><strong><em>&agrave;</em></strong></p>
</td>
<td colspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p><?= getExactField($complaints->product->product_code); ?></p>
</td>
</tr>
<tr>
<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p>Batch/Heat No.</p>
</td>
<td colspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p><?= getExactField($complaints->incommingqc->batch_no); ?></p>
</td>
<td colspan="5" rowspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p>Lot No.</p>
</td>
<td colspan="2" rowspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p><?= getExactField($complaints->incommingqc->lot); ?></p>
</td>
</tr>
<tr>
<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p>Mfg Date.</p>
</td>
<td colspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p><?= getExactField($complaints->incommingqc->mfg_date); ?></p>
</td>
</tr>
<tr>
<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p>Date of Despatch</p>
</td>
<td colspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p><?= getExactField($complaints->date_of_dispatch) ?></p>
</td>
<td colspan="5"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p>Invoice No.</p>
</td>
<td colspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p><?= getExactField($complaints->invoice_no) ?></p>
</td>
</tr>
<tr>
<td colspan="10"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p><strong><em>Description Of Complaints:</em></strong></p>
<p><?= getExactField($complaints->compaint_desc) ?></p>
</td>
</tr>
<tr>
<td colspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p><strong><em>Nature Of Complaints </em></strong><strong><em>&agrave;</em></strong><strong><em>&nbsp;&nbsp; </em></strong></p>
</td>
<td colspan="3"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p><?= getExactField($complaints->compaint_nature) ?></p>
</td>
<td colspan="4"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p><strong><em><!-- MAJOR --></em></strong></p>
</td>
<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p><strong><em><!-- MINOR --></em></strong></p>
</td>
</tr>
<tr>
<td colspan="10"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p>Report Of Works Head / QC Incharge On Complaint</p>
<p><?= getExactField($complaints->report_of_work) ?></p>
</td>
</tr>
<tr>
<td colspan="10"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p>Corrective Action Taken:</p>
<p><?= getExactField($complaints->corrective_action) ?></p>
</td>
</tr>
<tr>
<td colspan="4" width="50%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p>Result Of Action Taken</p>
<p><?= getExactField($complaints->taken_action_result) ?></p>
</td>
<td colspan="6" width="50%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p>Actions Proposed For Future</p>
<p><?= getExactField($complaints->proposed_action) ?></p>
</td>
</tr>
<tr>
<td colspan="4" width="50%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p>Analysed By:</p>
<p><?= getExactField($complaints->analysed_by) ?></p>
</td>
<td colspan="6" width="50%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; ">
<p>Closed By</p>
<p><?= getExactField($complaints->closed_by) ?></p>
<h4>M.D / Works Head</h4>
</td>
</tr>
</tbody>
</table>
