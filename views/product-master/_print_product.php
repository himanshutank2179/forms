<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 7/20/2018
 * Time: 5:01 PM
 */
?>
<p>&nbsp;</p>
<h3><p align="center">Master list of Product(finish product)</p></h3>
<table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">
    <tr>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Sr.No.</p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>product</p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Generic Name(Allise)</p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Model</p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Technical Specification</p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Bill of material(BOM)</p>
        </td>
    </tr>
    <tr>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($product->product_master_id) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($product->product_name) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($product->generic_name) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($product->model) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($product->bill_of_material) ?></p>
        </td>
    </tr>

</table>
<p>Form No:F/PUR/04 page No:1/1 issue/rev.No.1.0 dated 01/09/2015 this record retain for three years</p>

