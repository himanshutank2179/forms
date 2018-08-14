<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 7/20/2018
 * Time: 5:38 PM
 */
?>
<p align="center"><strong>BGI Engitech Pvt Ltd</strong></p>
<p align="center"><strong>AHMEDABAD</strong></p>
<table  width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">
    <tr>
        <td colspan="10" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <b><p>Master list of Machine and plant.</p></b>
        </td>
    </tr>
    <tr>
        <td colspan="2" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Revision</p>
        </td>
        <td colspan="4" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Updated On : </p>
        </td>
        <td colspan="4" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Department: </p>
        </td>
    </tr>
    <tr>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Sr.No</p>
            <p>&nbsp;</p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Name of</p>
            <p>Machine/Equipment/plant:</p>
            <p>&nbsp;</p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Identification</p>
            <p>No:</p>
            <p>&nbsp;</p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Mfg.by</p>
            <p>&nbsp;</p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Machine</p>
            <p>Sr.No.</p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Dt/Year</p>
            <p>Installation</p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Capacity</p>
            <p>&nbsp;</p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Purchase cost</p>
            <p>In Rs.</p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Location</p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Remark</p>
        </td>
    </tr>
    <tr>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($machine->machine_master_id) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($machine->name) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($machine->identification_no) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($machine->mfg_by) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($machine->machine_sr_no) ?> </p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($machine->installation_date) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($machine->capacity) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($machine->purchase_cost) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($machine->location) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($machine->remark) ?></p>
        </td>
    </tr>

</table>
<p>&nbsp; Form no: F/MNT/03page 1/1 issue/rev.no.1.0 date 1/9/2015. This record retains for three years.</p>
<p>Signature HOD/Production I/C</p>
