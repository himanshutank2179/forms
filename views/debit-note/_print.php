<?php
use app\models\DebitNote;
?>
<h1 align="center">DEBIT NOTE</h1>
<table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">
	<tr>
		<td colspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<b>BILLED TO:</b>	
		</td>
		<td colspan="4" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<b>DEBIT NOTE</b>
		</td>
	</tr>

	<tr>
		<td colspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<b>Name</b>
            <p><?= getExactField($debitnote->party_name) ?></p>
		</td>
		<td colspan="4" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <b>Debit Note No.</b>
            <p><?= getExactField($debitnote->debit_note_no) ?></p>
		</td>
	</tr>

	<tr>
		<td colspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<b>Address1</b>
            <p><?= getExactField($debitnote->address1) ?></p>
		</td>
		<td colspan="4" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<b>Date</b>
            <p><?= getExactField(date('Y-m-d',strtotime($debitnote->bill_date))) ?></p>
		</td>
	</tr>

	<tr>
		<td colspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<b>Address2</b>
            <p><?= getExactField($debitnote->address2) ?></p>
		</td>
		<td colspan="4" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <b>Bill Ref.No</b>
            <p><?= getExactField($debitnote->bill_no) ?></p>.
		</td>
	</tr>

	<tr>
		<td colspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<b>Address3</b>
            <p><?= getExactField($debitnote->address3) ?></p>
		</td>
		<td colspan="4" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<b>Date</b>
            <p><?= getExactField(date('Y-m-d',strtotime($debitnote->bill_date))) ?></p>
		</td>
	</tr>


	<tr>
		<td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<b><u>Remarks:</u></b><br>
			<b>BEING THE AMOUNT DEBITED TO YOUR ACCOUNT TOWARDS GOODS RETURNED</b>
		</td>	
	</tr>


    <tr>
        <td  width="5%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <b>SI. No.</b>
        </td>
        <td width="45%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <b>Perticulars</b>
        </td>
        <td width="15%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <b>Quantity</b>
        </td>
        <td width="10%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <b>UOM</b>
        </td>
        <td width="10%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <b>Rate</b>
        </td>
        <td width="15%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <b>Amount(Rs.)</b>
        </td>
    </tr>

    <?php
    $DebitNoteDetails = \app\models\DebitNoteDetails::find()->where(['debit_note_id'=>$debitnote->debit_note_id])->all();
    ?>
    <?php foreach ($DebitNoteDetails as $key => $debit): ?>
    <tr>
        <td  width="5%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($debit->debit_note_id) ?></p>
        </td>
        <td width="45%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($debit->product->product_name) ?></p>
        </td>
        <td width="15%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($debit->qty) ?></p>
        </td>
        <td width="10%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($debit->uom) ?></p>
        </td>
        <td width="10%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($debit->rate) ?></p>
        </td>
        <td width="15%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($debit->amount) ?></p>
        </td>
    </tr>

	<tr>
		<td  width="5%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			
		</td>
		<td width="45%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<b>GROSS TOTAL</b>
		</td>
		<td width="15%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">

		</td>
		<td width="10%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
		
		</td>
		<td width="10%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			
		</td>
		<td width="15%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($debit->amount) ?></p>
		</td>
	</tr>
    <?php endforeach; ?>
	<tr>
		<td  width="5%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			
		</td>
		<td width="45%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			GST
		</td>
		<td width="15%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			
		</td>
		<td width="10%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
		
		</td>
		<td width="10%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <?= getExactField($debitnote->party_gst) ?>%
		</td>
		<td width="15%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <?php echo $gsttot=$debit->amount*$debitnote->party_gst/100 ?>
	</tr>

	<tr>
		<td  width="5%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			
		</td>
		<td width="45%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			Rounded Off
		</td>
		<td width="15%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			
		</td>
		<td width="10%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
		
		</td>
		<td width="10%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
	
		</td>
		<td width="15%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			
		</td>
	</tr>

	<tr>
		<td  width="5%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			
		</td>
		<td width="45%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			DELEVERY CHARGES
		</td>
		<td width="15%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			
		</td>
		<td width="10%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
		
		</td>
		<td width="10%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
	
		</td>
		<td width="15%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($debitnote->delivery_charges) ?></p>
		</td>
	</tr>

	<tr>
		<td  width="5%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			
		</td>
		<td width="45%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<b>TOTAL</b>
		</td>
		<td width="15%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			
		</td>
		<td width="10%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
		
		</td>
		<td width="10%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
	
		</td>
		<td width="15%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?php echo $tot=getExactField($debit->amount + $debitnote->delivery_charges+$gsttot) ?></php></p>
		</td>
	</tr>

	<tr>
		<td colspan="4" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <?php echo getIndianCurrency($tot) ?>
		</td>	
		<td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<b>TOTAL</b>
		</td>	
		<td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <?= $tot ?>
		</td>	
	</tr>

	<tr>
		<td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <b>Company Details</b>
		</td>	
		<td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<b>For Company Pvt Ltd</b>
		</td>			
	</tr>

	<tr>
		<td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			GST No. 19000000000
		</td>	
			
		
	</tr>
	<tr>
		<td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			Party VAT/TIN VAT
		</td>	
		
	</tr>

	<tr>
		<td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			Party GST
		</td>	
			
	</tr>


	<tr>
		<td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			Declaration:
		</td>	
		<td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
			<b>Director</b>
		</td>	
			
	</tr>

	<tr>
		<td colspan="6" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
		 We declare that this invoice cum Debit Note show the actual price of the goods and details described and that all perticular are true and correct.
		</td>			
	</tr>

</table>	