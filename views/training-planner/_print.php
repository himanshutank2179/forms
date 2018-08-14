<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 7/18/2018
 * Time: 2:11 PM
 */


?>

<table width="100%" style="border-collapse: collapse; border: 1px solid black; text-align: left;">
    <tr>
        <td colspan="10" style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;"><p><strong><center>PATFAB ENGINEERS PVT LTD</center></strong></p></td>
    </tr>
    <tr>
        <td colspan="10" style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;"><p><center>79/A-G.I.D.C PH-I VATVA</center></p></td>
    </tr>
    <tr>
        <td colspan="10" style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;"><p><center>AHMEDABAB-382 445</center></p></td>
    </tr>
    <?php
    $User = \app\models\Users::find()->where(['user_id'=>$train->user_id])->all();
    ?>
    <?php foreach ($User as $key => $userdata): ?>
    <tr>
        <td colspan="6"  style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <p><strong>Name:&nbsp; </strong>
            <?= getExactField($userdata->name) ?></p>
        </td>
        <td colspan="4"  style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <p><strong>Employee code:&nbsp;</strong>
            <?= getExactField($userdata->emp_code) ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <p><b>Designation:</b></p>
        </td>
        <td colspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <p><b>Department:</b></p>
        </td>
        <td  style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <p><b>Date of Joining:</b></p>
        </td>
        <td  style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <p><b>Date of Birth:</b></p>
            <p>&nbsp;</p>
        </td>
        <td colspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <p><b>Educational</b></p>
            <p><b>Qualification</b></p>
        </td>
        <td colspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <p><b>Job experience</b></p>
        </td>
    </tr>

    <tr>
        <td colspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <?= getExactField($userdata->designation) ?>
        </td>
        <td colspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">

        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">

        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            
        </td>
        <td colspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <?= getExactField($userdata->education_qualification) ?>
        </td>
        <td colspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <?= getExactField($userdata->experience) ?>
        </td>
    </tr>
    <?php endforeach;?>
    <tr>
        <td  style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <p><b>Sr.No.</b></p>

        </td>
        <td  style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <p><b>Name of Training</b></p>

        </td>
        <td  style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <p><b>Period</b></p>
            <p><b>Date</b></p>
            <p><b>Of Training</b></p>
        </td>
        <td  style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <p><b>Type of Training</b></p>

        </td>
        <td  style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <p><b>Name of Institute</b></p>
        </td>
        <td  style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <p><b>Name of Faculty</b></p>

        </td>
        <td  style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <p><b>Result of Training</b></p>
            <p><b>Grade/Certificate No &amp;Dt.</b></p>
        </td>
        <td colspan="2"  style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <p><b>Feed back of HOD of Employee about effectiveness</b></p>
        </td>
        <td  style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <p><b>Remarks by HOD</b></p>
        </td>
    </tr>

    <tr>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <?= getExactField($train->training_planner_id) ?>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <?= getExactField($train->name_of_training) ?>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <?= getExactField($train->period) ?>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <?= getExactField($train->type_of_training) ?>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">

        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <?= getExactField($train->faculty) ?>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">

        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <?= getExactField($train->training_feedback) ?>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">

        </td>



    </tr>
    <tr>
        <td colspan="7" rolspan="2" style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <p><b>Reviewed and Approved By:</b></p>
        </td>
        <td  colspan="3" style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <p><b>M.R &amp;&nbsp; Training I/C</b></p>
        </td>
    </tr>

</table>
<p>Form No:F/Trg/02 Page 1/1 issue/Rev.1.0 date:1/10/06 this record retain for three years.</p>
