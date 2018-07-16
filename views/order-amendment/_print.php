<?php
$productKey = '';
$revisedDesc = '';
$productQty = '';
$ratePrUnit = '';
$totalAmount = '';
$delivery_period = getExactField($orderAmendment->delivery_period);
$delivery_required_at = getExactField($orderAmendment->delivery_required_at);
$made_of_dispatch = getExactField($orderAmendment->made_of_dispatch);
$payment_terms = getExactField($orderAmendment->payment_terms);
$insurance = getExactField($orderAmendment->insurance);
$inspected_by = getExactField($orderAmendment->inspected_by);
$approved_by = getExactField($orderAmendment->approved_by);
$total = getExactField($orderAmendment->total);
$qu_ref_no = getExactField($orderAmendment->quotation_ref_no);
$date = date('Y-m-d');




foreach ($orderAmendmentProducts as $key => $product) {
    $productKey .= '<h6><strong><u>' . ($key + 1) . '</u></strong></h6>';
    $revisedDesc .= '<p><strong><u>' . getExactField($product->product->product_name) . ' - ' . getExactField($product->reviced_desc) . '</u></strong></p>';
    $productQty .= '<p><strong><u>' . getExactField($product->quantity) . '</u></strong></p>';
    $ratePrUnit .= '<p><strong><u>' . getExactField($product->rate_per_unit) . '</u></strong></p>';
    $totalAmount .= '<p><strong><u>' . getExactField($product->total_amount) . '</u></strong></p>';


}


?>

<p>Date: - <?= $date ?></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Dear Sir,</p>
<p align="center">Subject: - <strong><u>Order amendment</u></strong></p>
<p align="center">&nbsp;</p>
<p>This is in reference to your order&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Dated;
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;We hereby confirm the amendment of your order as mentioned above with following revised terms,
    conditions, .</p>
<table border="1" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
        <td colspan="4" valign="top" width="313">
            <p>Your Purchase order No: <?= $qu_ref_no ?></p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <h5>Revised</h5>
            <h5 align="center">Terms &amp; Conditions</h5>
        </td>
        <td colspan="3" valign="top" width="151">
            <p align="center">Date: <?= $date ?></p>
            <p>&nbsp;</p>
        </td>
        <td valign="top" width="208">
            <p>Our quotation ref. No.</p>
            <p>&nbsp;</p>
            <p>Date:</p>
            <p>&nbsp;</p>
        </td>
    </tr>
    <tr>
        <td valign="top" width="49" style="text-align: center;">
            <h6><strong>Sr.no.</strong></h6>
            <h6><strong><u>&nbsp;</u></strong></h6>
        </td>
        <td colspan="3" valign="top" width="264" style="text-align: center;">
            <b>Revised</b> <br>
            <b>Description of Material</b>
            <h6><strong>&nbsp;</strong></h6>
        </td>
        <td colspan="2" valign="top" width="66" style="text-align: center;">
            <p><strong>Quantity</strong></p>
            <h6><strong>&nbsp;</strong></h6>
        </td>
        <td valign="top" width="86" style="text-align: center;">
            <b>Rate</b> <br>
            <b>Per <br> unit</b>
            <h6 align="center"><strong>Rs/Ps</strong></h6>
        </td>
        <td valign="top" width="208" style="text-align: center;">
            <b>Total Amount</b>
            <p><strong>&nbsp;</strong></p>
            <h6><strong>&nbsp;</strong></h6>
        </td>
    </tr>
    <tr>
        <td valign="top" width="49" style="text-align: center;">
            <?= $productKey ?>

        </td>
        <td colspan="3" valign="top" width="264" style="text-align: center;">
            <?= $revisedDesc ?>
        </td>
        <td colspan="2" valign="top" width="66" style="text-align: center;">
            <?= $productQty ?>
        </td>
        <td valign="top" width="86" style="text-align: center;">
            <?= $ratePrUnit ?>
        </td>
        <td valign="top" width="208" style="text-align: center;">
            <?= $totalAmount ?>
        </td>
    </tr>
    <tr>
        <td colspan="8" valign="top" width="672">
            <p>Total Amount in figure and in words:</p>
            <p>&nbsp;</p>
        </td>
    </tr>
    <tr>
        <td colspan="8" valign="top" width="672">
            <h6><strong>&nbsp;We confirm the following Revised Terms &amp; Conditions:</strong></h6>
        </td>
    </tr>
    <tr>
        <td colspan="3" valign="top" width="232">
            <h6>Delivery Period: <span class="small"><?= $delivery_period ?></span></span></h6>
        </td>
        <td colspan="2" valign="top" width="145">
            <h6>Delivery required at:  <span class="small"><?= $delivery_required_at ?></span></h6>
            <p>&nbsp;</p>
        </td>
        <td colspan="3" valign="top" width="295">
            <h6>Mode of Dispatch:  <span class="small"><?= $made_of_dispatch ?></span></h6>
        </td>
    </tr>
    <tr>
        <td colspan="3" valign="top" width="232">
            <h6>Payment terms: <span class="small"><?= $payment_terms ?></span></h6>
            <h6><strong><u>&nbsp;</u></strong></h6>
        </td>
        <td colspan="2" valign="top" width="145">
            <p><strong><u>I</u></strong>nsuranc<strong><u>e</u></strong></p>
            <span class="small"><?= $insurance ?></span>
        </td>
        <td colspan="3" valign="top" width="295">
            <p>Inspection by: at your consignee end/Third party</p>
            <h6><strong><u>&nbsp;</u></strong></h6>
        </td>
    </tr>
    <tr>
        <td colspan="8" valign="top" width="672">
            <h6><strong>Requirement of Test certificate/Product Compatibility test certificate: Yes/No.</strong></h6>
            <h6><strong><u>&nbsp;</u></strong></h6>
        </td>
    </tr>
    <tr>
        <td colspan="8" valign="top" width="672">
            <p>This order &ndash;confirmation is as per Mutual contract and acceptance upon of this, in case any dispute
                arising out of order shall be subjected to jurisdiction of competent court of Law Govt. of India-within
                the district of Ahmedabad-Gujarat.</p>
        </td>
    </tr>
    <tr>
        <td colspan="2" valign="top" width="185">
            <p align="center">&nbsp;</p>
            <p align="center">&nbsp;</p>
            <p align="center">Sign. In-charge Marketing</p>
        </td>
        <td colspan="5" valign="top" width="279">
            <p align="center">Approved by.</p>
            <p align="center">&nbsp;</p>
            <p align="center">Sign. Of CEO (Business)</p>
        </td>
        <td valign="top" width="208">
            <p align="center">(Seal)</p>
        </td>
    </tr>
    <tr>
        <td width="49">&nbsp;</td>
        <td width="137">&nbsp;</td>
        <td width="47">&nbsp;</td>
        <td width="81">&nbsp;</td>
        <td width="65">&nbsp;</td>
        <td width="1">&nbsp;</td>
        <td width="86">&nbsp;</td>
        <td width="208">&nbsp;</td>
    </tr>
    </tbody>
</table>
<p><u>Form no. F/MKT/04ssue/rev no:1.0 dt.1/09/2015. </u><u>Record retain for three years from the date of issue</u></p>
<p>&nbsp;</p>