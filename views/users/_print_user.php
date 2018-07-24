<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 7/20/2018
 * Time: 6:26 PM
 */
?>


<p>DESIGNATION &amp; INDIVIDUAL&nbsp; RESPONSIBILITY&amp; AUTHORITY</p>
<table width="100%"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">

    <tr>
        <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Employee</p>
            <p>code</p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Name of Staff</p>
        </td>
        <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Education Qualification</p>
        </td>
        <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Professional Education</p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Designation</p>
        </td>
        <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Experience</p>
            <p>&nbsp;</p>
        </td>
        <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Responsibility</p>
            <p>/Duty list</p>
        </td>
        <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>&nbsp;</p>
            <p>Authority</p>
        </td>
        <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <h4>Signature of</h4>
            <p>Staff</p>
        </td>
    </tr>

    <tr>
        <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($emp->emp_code) ?></p>

        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($emp->name) ?></p>
        </td>
        <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($emp->education_qualification) ?></p>
        </td>
        <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($emp->professional_education) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($emp->designation) ?></p>
        </td>
        <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($emp->experience) ?></p>
        </td>
        <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($emp->responsibility_id) ?></p>

        </td>
        <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>&nbsp;<?= getExactField($emp->authority) ?></p>
        </td>
        <td  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($emp->signature_of_staff) ?></p>
        </td>
    </tr>
</table>
<p><strong>The above Duty list &amp; responsibilities are understand by the respective employees and acknowledge for the same by noted the above</strong></p>
<p><strong>Management Representative</strong></p>
<p>&nbsp;&nbsp; <u>Form no:F/HRD/01 page 1/1 issue /rev.no.1.0 date 1/09/2015 this record retain for three years from date of issue</u>.</p>

