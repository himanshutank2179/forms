<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 7/24/2018
 * Time: 9:11 PM
 */
?>

<table width="100%" style="border-collapse: collapse; border: 1px solid black; text-align: left;">
    <tr>
        <td colspan="6" align="center">
            <h2><b>Clients Information</b></h2>
        </td>
    </tr>
    <tr>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Name :</b></b> <?= getExactField($clients->name) ?></p>
        </td>
        <td colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Email :</b> <?= getExactField($clients->email) ?></p>
        </td>
    </tr>
    <tr>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;  width: 16%;">
            <p><b>Street</b></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;  width: 16%;">
            <p><b>Landmark</b></p>
        </td>

        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; width: 16%;">
            <p><b>Area</b></p>
        </td>

        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;  width: 16%;">
            <p><b>Country</b></p>
        </td>

        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; width: 16%;">
            <p><b>State</b></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; width: 16%;">
            <p><b>City</b></p>
        </td>
    </tr>

    <tr>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;  width: 16%;">
            <p><?= getExactField($clients->street) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;  width: 16%;">
            <p><?= getExactField($clients->landmark) ?></p>
        </td>

        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; width: 16%;">
            <p><?= getExactField($clients->area) ?></p>
        </td>

        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;  width: 16%;">
            <p><?= getExactField($clients->country->name) ?></p>
        </td>

        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; width: 16%;">
            <p><?= getExactField($clients->state->name) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; width: 16%;">
            <p><?= getExactField($clients->city->name) ?></p>
        </td>
    </tr>


    <tr>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Statecode</b></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Account Number</b></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Bank Ifsc</b></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Gstin</b></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Pan</b></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><b>Flat</b></p>
        </td>
    </tr>

    <tr>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;  width: 16%;">
            <p><?= getExactField($clients->statecode) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;  width: 16%;">
            <p><?= getExactField($clients->account_number) ?></p>
        </td>

        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; width: 16%;">
            <p><?= getExactField($clients->bank_ifsc) ?></p>
        </td>

        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;  width: 16%;">
            <p><?= getExactField($clients->gstin) ?></p>
        </td>

        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; width: 16%;">
            <p><?= getExactField($clients->pan) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px; width: 16%;">
            <p><?= getExactField($clients->flat) ?></p>
        </td>
    </tr>

</table>
