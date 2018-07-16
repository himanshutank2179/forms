<?php
use app\models\QuotationProducts;
use app\models\ProductMaster;

$QuotationProducts = QuotationProducts::find()->where(['quotation_product_id'=>$quotation->order_quotation_id])->all();
$productKey = '';
$quantity ='';
$rate ='';
$cgst ='';
$sgst ='';
$igst ='';
$gst ='';
$totalamount =0;
foreach ($QuotationProducts as $key => $product) {

    $productKey .= '<h6><strong><u>' . ($key + 1) . '</u></strong></h6>';
    $quantity .= '<p><strong><u>' . getExactField($product->quantity) . '</u></strong></p>';
    $rate .= '<p><strong><u>' . getExactField($product->rate) . '</u></strong></p>';
    $cgst .= '<p><strong><u>' . getExactField($product->cgst) . '</u></strong></p>';
    $sgst .= '<p><strong><u>' . getExactField($product->sgst) . '</u></strong></p>';
    $igst .= '<p><strong><u>' . getExactField($product->igst) . '</u></strong></p>';
    $gst .= '<p><strong><u>' . getExactField($product->gst) . '</u></strong></p>';
    $totalamount .= $totalamount + $product->total_amount;

}

?>


<p style="margin: 0in 0in 0.0001pt; font-size: 10pt; font-family: 'Times New Roman', serif;"><strong><span style="font-size: 11.0pt;">1, Nilkanth Estate, Survey No.398 Nr.TATA Motors Show Room</span></strong></p>
<p style="margin: 0in 0in 0.0001pt; font-size: 10pt; font-family: 'Times New Roman', serif;"><strong><span style="font-size: 11.0pt;">Sarkhej-Bavla Road Ahmedabad-382210 </span></strong></p>
<p style="margin: 0in 0in 0.0001pt; font-size: 10pt; font-family: 'Times New Roman', serif;"><strong><span style="font-size: 11.0pt;">Visit: mail to </span></strong><a style="color: blue; text-decoration: underline;" href="mailto:deepindersignh@bgiengitech.com"><strong><span style="font-size: 11.0pt;">deepindersignh@bgiengitech.com</span></strong></a><strong><span style="font-size: 11.0pt;">&nbsp; www.bgiengitech.com</span></strong></p>
<h1 style="margin: 0in 0in 0.0001pt; text-align: center; break-after: avoid; font-size: 12pt; font-family: 'Times New Roman', serif; text-decoration: underline;">&nbsp;</h1>
<h1 style="margin: 0in 0in 0.0001pt; text-align: center; break-after: avoid; font-size: 12pt; font-family: 'Times New Roman', serif; text-decoration: underline;">Order Quotation</h1>
<p style="text-align: justify; margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: 'Times New Roman', serif;">To:</p>
<p style="text-align: justify; margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: 'Times New Roman', serif;">M/s:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date: -</p>
<p style="text-align: justify; margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: 'Times New Roman', serif;">&nbsp;</p>
<p style="text-align: justify; margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: 'Times New Roman', serif;">&nbsp;</p>
<p style="text-align: justify; margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: 'Times New Roman', serif;">Dear Sir,</p>
<h3 style="margin: 0in 0in 0.0001pt; text-align: center; break-after: avoid; font-size: 12pt; font-family: 'Times New Roman', serif;">Subject: Order Quotation</h3>
<p style="text-align: justify; margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: 'Times New Roman', serif;"><span style="font-size: 14.0pt;">Reference: your Inquiry date :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date:</span></p>
<p style="text-align: justify; margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: 'Times New Roman', serif;">&nbsp;</p>
<p style="text-align: justify; margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: 'Times New Roman', serif;">We are very much thankful to receive your valuable Inquiry. We have Note down all Items carefully of your inquiry and please find here with our most competitive rate of your bellow decrypted product &nbsp;.We assure the product quality and same has been supplied within time we are looking for your valuable order.</p>


<table border="1" width="100%"  style="border-collapse: collapse; text-align: left;">
    <tr align="center">
        <td colspan="5" style="font-size: 20px">
            <p>Your Purchase order No:</p>
            <p><?= getExactField($quotation->order_quotation_id) ?></p>
        </td>
        <td colspan="3" style="font-size: 20px">
            <p align="center">Date:</p>
            <p><?= getExactField(date('Y-m-d',strtotime($quotation->inquiry_date))) ?></p>
        </td>
        <td colspan="4" valign="top" width="149" style="font-size: 20px">
            <p>GST</p>
            <p><?= $gst ?></p>
        </td>
        <td valign="top" width="167" style="font-size: 20px">
            <p>Our quotation ref. No.</p>
            <p><?= getExactField($quotation->our_quote_ref_num) ?></p>
            <p>Date:</p>
            <p><?= getExactField(date('Y-m-d',strtotime($quotation->inquiry_date))) ?></p>
        </td>
    </tr>
    <tr>
        <td valign="top" width="10%" style="font-size: 20px" align="center">
            <h6 style="font-size: 20px"><strong>Sr.no.</strong></h6>
            <h6><strong><u>&nbsp;</u></strong></h6>
        </td>

            <td colspan="4" valign="top" width="30%" style="font-size: 20px" align="center">
              <b>Description of Material</b>

            </td>
        <td colspan="2" valign="top" width="66" style="font-size: 20px" align="center">
            <p><strong>Quantity</strong></p>
            <h6><strong>&nbsp;</strong></h6>
        </td>
        <td valign="top" width="74" style="font-size: 20px" align="center">
            <b>Rate</b>
            <b>Per unit</b>
            <b align="center"><strong>Rs/Ps</strong></b>
        </td>
        <td valign="top" width="50" style="font-size: 20px" align="center">
            <b>CGST</b>
        </td>
        <td colspan="2" valign="top" width="50" style="font-size: 20px" align="center">
            <b>SGST</b>
        </td>
        <td valign="top" width="50" style="font-size: 20px" align="center">
            <b>IGST</b>
        </td>
        <td valign="top" width="167" style="font-size: 20px" align="center">
            <b>Total Amount</b>
            <p><strong>&nbsp;</strong></p>
        </td>
    </tr>
    <tr>
        <td><?= $productKey ?></td>
        <?php
        $ProductMaster = ProductMaster::find()->where(['product_master_id'=>$quotation->order_quotation_id])->all();
        ?>
        <?php foreach ($ProductMaster as $key => $pro):?>
             <td colspan="4"><p><?= getExactField($pro->product_name) ?></p></td>
        <?php endforeach; ?>
        <td colspan="2"><?= $quantity ?></td>
        <td><?= $rate ?></td>
        <td><?= $cgst ?></td>
        <td colspan="2"><?= $sgst ?></td>
        <td><?= $igst ?></td>
        <td><?= $totalamount ?></td>
    </tr>
    <tr>

        <td colspan="13" valign="top"  style="font-size: 20px">
            <p>Total Amount in figure and in words:</p>
            <p>
    <?= getIndianCurrency((int) $totalamount) ?>
            </p>
        </td>
    </tr>
    <tr>

        <td colspan="13" valign="top"  style="font-size: 20px">
            <h6 style="font-size: 20px"><strong>We confirm the following Terms &amp; Conditions:</strong></h6>
        </td>
    </tr>
    <tr>
        <td colspan="4" valign="top" width="196" style="font-size: 20px">
            <h6 style="font-size: 20px">Delivery Period</h6>
            <?= getExactField($quotation->delivery_period) ?>
        </td>
        <td colspan="4" valign="top" width="125" style="font-size: 20px">
            <h6 style="font-size: 20px">Delivery required at</h6>
            <p>&nbsp;</p>
        </td>

        <td colspan="5" valign="top" width="229" style="font-size: 20px">
            <h6 style="font-size: 20px">Mode of Dispatch</h6>
            <p><?= getExactField($quotation->mod_of_dispatch) ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="4" valign="top" width="196" style="font-size: 20px">
            <h6 style="font-size: 20px">Payment terms:</h6>
           <p><?= getExactField($quotation->payment_terms) ?></p>
        </td>
        <td colspan="4" valign="top" width="125" style="font-size: 20px">
            <p>Insurance</p>
          <p><?= getExactField($quotation->inasurance) ?></p>
        </td>

        <td colspan="5" valign="top" width="229" style="font-size: 20px">
            <p>Inspection by: at your consignee end/Third party</p>
            <p><?= getExactField($quotation->inspection_by) ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="13" valign="top" width="536" style="font-size: 20px;">
            <h6 style="font-size: 20px"><strong>Requirement of Test certificate/Product compliance certificate: Yes/No.</strong></h6>

        </td>
    </tr>
    <tr>
        <td colspan="13" valign="top" width="536" style="font-size: 20px">
            <p>This order &ndash;confirmation is as per Mutual contract and acceptance upon of this, in case any dispute arising out of order shall be subjected to jurisdiction of court of Law Govt. of India-within the district of Ahmedabad-Gujarat.</p>
        </td>
    </tr>
    <tr>
        <td colspan="2" valign="top" width="158" style="font-size: 20px">
            <p align="center">&nbsp;</p>
            <p align="center">&nbsp;</p>
            <p align="center">Sign. In-charge Marketing</p>
        </td>
        <td colspan="6" valign="top" width="238" style="font-size: 20px">
            <p align="center">Approved by.</p>
            <p align="center"><?= getExactField($quotation->approved_by) ?>&nbsp;</p>
            <p align="center">Sign. of CEO(Business)</p>
        </td>
        <td colspan="5" valign="top" width="149" style="font-size: 20px">
            <p align="center">(Seal)</p>
        </td>

    </tr>

</table>