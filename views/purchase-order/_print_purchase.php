<?php
use app\models\ProductMaster;
?>

<br>
Dear Sir,<br>
Kindly arrange to supply the following Material as mentioned below terms & Conditions.

<table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">
    <tr>
        <td width="45%" colspan="2" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Purchase Order No:-</b></p>
            <?= getExactField($purchaseorder->purchase_order_id) ?>
        </td>
        <td width="35%" colspan="2" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Date:</b></p>
            <?= getExactField($purchaseorder->created_at) ?>
        </td>
        <td width="30%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Your quotation ref.No.</b></p>
            <?= getExactField($purchaseorder->quote_ref_no) ?>
            <br>
            <p><b>Date:</b></p><?= getExactField($purchaseorder->created_at) ?>
        </td>
    </tr>

    <tr>
        <td width="5%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p align="center"><b>Sr.no.</b></p>
        </td>
        <td width="35%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p align="center"><b>Description of Material</b></p>
        </td>
        <td width="15%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p align="center"><b>Quantity</b></p>
        </td>
        <td width="15%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p align="center"><b>Rate Per unit Rs/Ps</b></p>
        </td>
        <td width="45%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p align="center"><b>Total Amount</b></p>
        </td>
    </tr>
    <?php
    $product = ProductMaster::find()->where(['product_master_id'=>$purchaseorder->product_id])->all();
    ?>
    <?php foreach ($product as $key => $purchase):?>
    <tr>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;" class="text-center"><?= $key+1 ?></td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;" class="text-center"><?= getExactField($purchase->product_name) ?></td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;" class="text-center"><?= getExactField($purchaseorder->qty) ?></td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;" class="text-center"><?= getExactField($purchaseorder->unit_price) ?></td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;" class="text-center"><?= getExactField($purchaseorder->qty * $purchaseorder->unit_price) ?></td>

    </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="5" width="100%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Total Amount in figure and in words:</b></p>
            <?php
                    echo  ucfirst(getIndianCurrency($purchaseorder->qty * $purchaseorder->unit_price));
            ?>
        </td>
    </tr>

    <tr>
        <td colspan="5" width="100%" style=" border: 1px solid black; padding: 0px 0px 0px 50px;margin: 0px 0px 0px 0px;">
            <p><u><b>Terms & Conditions:</b></u></p>
        </td>
    </tr>

    <tr>
        <td colspan="2" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Delivery Period:</b></p>
            <?= getExactField($purchaseorder->delivery_period) ?>
        </td>
        <td colspan="2" width="15%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Delivery required at</b></p>
            <?= getExactField($purchaseorder->delivery_required_at) ?>

        </td>
        <td colspan="1" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Mode of Dispatch</b></p>
            <?= getExactField($purchaseorder->mode_of_dispatch) ?>
        </td>
    </tr>

    <tr>
        <td colspan="2" width="45%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Payment terms</b>:</p>
            <?= getExactField($purchaseorder->payment_terms) ?>
        </td>
        <td colspan="2" width="35%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Insurance</b></p>
        </td>
        <td colspan="1" width="30%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Inspection by:at our consignee end/Third party</p>
        </td>
    </tr>

    <tr>
        <td colspan="5" width="100%" style=" border: 1px solid black; padding: 0px 0px 0px 50px;margin: 0px 0px 0px 0px;">
            <p><b>Requirement of Test certificate/Product compaliance certificate: Yes/No.</b></p>
        </td>
    </tr>

    <tr>
        <td colspan="5" width="100%" style=" border: 1px solid black; padding: 0px 0px 0px 50px;margin: 0px 0px 0px 0px;">
            <b>1.We reserve the right to reject the Material not conforming to the specifiction and description as mentioned in this purchase order.</b><br>
            2.Short/excees supply will expect on prior conset and approval.<br>
            3.Please note that all suppies must be accompained with delivery challan and invoice bill with clear demarcation of Purchase order.<br>
            4.This purchase order is as per Mutual contract and on acceptance of this, in case any dispute arising out of order shall be subjected to jurisdiction of competent court of Law Govt. of India-within the district of Ahmedabad-Gujarat
        </td>
    </tr>

    <tr>
        <td colspan="2" width="45%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>P.O. Prepared by:</p>
        </td>
        <td colspan="2" width="35%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>P.O.Approved by:</p>
        </td>
        <td colspan="1" width="30%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>(Seal)</p>
        </td>
    </tr>

    <tr>
        <td colspan="5" width="100%" style=" border: 1px solid black; padding: 0px 0px 0px 20px;margin: 0px 0px 0px 0px;">
            <u>Form no. F/Pur/01issue/rev no: 1.0 dt.1/09/2015. Record retain for three years from the date of issue</u>
        </td>
    </tr>

</table>