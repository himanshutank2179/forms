<?php

use app\models\Cities;
use app\models\Countries;
use app\models\States;



$productKey = '';
$productName = '';
$productQty = '';
$ratePrUnit = '';
$totalAmount = '';

$custAddress = getExactField($order_confirmation->client->flat) . ', ' . getExactField($order_confirmation->client->street) . ', ' . ', ' . getExactField($order_confirmation->client->landmark) . ', ' . ', ' . getExactField($order_confirmation->client->area) . ', ' . getExactField(Cities::findOne($order_confirmation->client->city)->name) . ', ' . getExactField(States::findOne($order_confirmation->client->state)->name) . ', ' . getExactField(Countries::findOne($order_confirmation->client->country)->name);
$custemail = getExactField($order_confirmation->client->email);
$to = getExactField($order_confirmation->client->name);
$ref_order_no = getExactField($order_confirmation->our_quote_ref_num);
$date = date('Y-m-d');
$order_number = getExactField($order_confirmation->order_number);
$our_quote_ref_num = getExactField($order_confirmation->our_quote_ref_num);
$delivery_period = getExactField($order_confirmation->delivery_period);
$mod_of_dispatch = getExactField($order_confirmation->mod_of_dispatch);
$payment_terms = getExactField($order_confirmation->payment_terms);
$insurance = getExactField($order_confirmation->inasurance);
$inspectedBy = getExactField($order_confirmation->inspection_by);
$city = getExactField(Cities::findOne($order_confirmation->city_id)->name);

$grandTotal = 0;


foreach ($orderConfProducts as $key => $product) {
    $productKey .= '<h6><strong><u>' . ($key + 1) . '</u></strong></h6>';
    $productName .= '<p><strong><u>' . getExactField($product->product->product_name) . '</u></strong></p>';
    $productQty .= '<p><strong><u>' . getExactField($product->quantity) . '</u></strong></p>';
    $ratePrUnit .= '<p><strong><u>' . getExactField($product->rate) . '</u></strong></p>';
    $totalAmount .= '<p><strong><u>' . getExactField($product->total_amount) . '</u></strong></p>';

    $grandTotal = ($grandTotal + $product->total_amount);


}


?>


<p><strong><?= $custAddress ?></strong></p>
<p><strong>Visit: mail to <a href="mailto:<?= $custemail ?>"><?= $custemail ?></a></strong></p>
<h1>&nbsp;</h1>
<h2>Order confirmation</h2>
<p>To: <?= $to ?></p>

<p>&nbsp;</p>

<p>Dear Sir,</p>

<p>Reference: - <?= $order_number ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Date: <?= $date ?></p>
<p>&nbsp;</p>
<p>We are very much thankful to receive your valuable order. And inform you that We Note down all Items carefully of
    your order .We also will inform you, when we dispatch your consignment.</p>
<table border="1" cellspacing="0" cellpadding="0" align="left" style="text-align: left;">
    <tbody>
    <tr>
        <td colspan="4" valign="top" width="313" height="50">
            <p>Your Purchase order No:</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        </td>
        <td colspan="3" valign="top" width="151" height="50">
            <p align="center">Date: <?= $date ?></p>

        </td>
        <td valign="top" width="208" height="50">
            <p>Our quotation ref. No. <?= $ref_order_no ?></p>


        </td>
    </tr>
    <tr>
        <td valign="top" width="49" align="center">
            <h6><strong>Sr.no.</strong></h6>
            <h6><strong><u>&nbsp;</u></strong></h6>
        </td>
        <td colspan="3" valign="top" width="264" align="center">
            <b>Description of Material</b>
            <h6><strong>&nbsp;</strong></h6>
        </td>
        <td colspan="2" valign="top" width="66" align="center">
            <p><strong>Quantity</strong></p>
            <h6><strong>&nbsp;</strong></h6>
        </td>
        <td valign="top" width="86" align="center">
            <b>Rate <br> Per <br> unit</b>

            <h6 align="center"><strong>Rs/Ps</strong></h6>
        </td>
        <td valign="top" width="208" align="center">
            <b>Total Amount</b>
            <p><strong>&nbsp;</strong></p>
            <h6><strong>&nbsp;</strong></h6>
        </td>
    </tr>
    <!--Content Row Starts Here-->
    <tr>
        <td valign="top" width="49" align="center">
            <?= $productKey ?>
        </td>
        <td colspan="3" valign="top" width="264" align="center">
            <?= $productName ?>
        </td>
        <td colspan="2" valign="top" width="66" align="center">
            <?= $productQty ?>
        </td>
        <td valign="top" width="86" align="center">
            <?= $ratePrUnit ?>
        </td>
        <td valign="top" width="208" align="center">
            <?= $totalAmount ?>

        </td>
    </tr>
    <!--Content Row Ends Here-->
    <tr>
        <td colspan="8" valign="top" width="672">
            <p>Total Amount in figure and in words:</p>
            <p><?= ucfirst(getIndianCurrency($grandTotal)) ?></p>

        </td>
    </tr>
    <tr>
        <td colspan="8" valign="top" width="672">
            <h6><strong><u>&nbsp;We confirm the following Terms &amp; Conditions:</u></strong></h6>
        </td>
    </tr>
    <tr>
        <td colspan="3" valign="top" width="232">
            <h6>Delivery Period: <span class="small"><?= $delivery_period ?></span></h6>

        </td>
        <td colspan="2" valign="top" width="145">
            <h6>Delivery required at: <span class="small"><?= $city ?></span></h6>
            <p>&nbsp;</p>
        </td>
        <td colspan="3" valign="top" width="295">
            <h6>Mode of Dispatch: <span class="small"><?= $mod_of_dispatch ?></span></h6>
        </td>
    </tr>
    <tr>
        <td colspan="3" valign="top" width="232">
            <h6>Payment terms:</h6>
            <h6><strong><u> <span class="small"><?= $payment_terms ?></span></u></strong></h6>
        </td>
        <td colspan="2" valign="top" width="145">
            <p><strong><u>I</u></strong>nsuranc<strong><u>e</u></strong></p>
            <h6><strong><u> <span class="small"><?= $insurance ?></span></u></strong></h6>
        </td>
        <td colspan="3" valign="top" width="295">
            <p>Inspection by: <?= $inspectedBy ?></p>
            <h6><strong><u>&nbsp;</u></strong></h6>
        </td>
    </tr>
    <tr>
        <td colspan="8" valign="top" width="672">
            <h6><strong>Requirement of Test certificate/Product compliance certificate: Yes/No.</strong></h6>
            <h6><strong><u>&nbsp;</u></strong></h6>
        </td>
    </tr>
    <tr>
        <td colspan="8" valign="top" width="672">
            <p>This order &ndash;confirmation is as per Mutual contract and acceptance upon of this, in case any dispute
                arising out of order shall be subjected to jurisdiction of court of Law Govt. of India-within the
                district of Ahmedabad-Gujarat.</p>
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
            <p align="center">Sign. of CEO(Business)</p>
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
