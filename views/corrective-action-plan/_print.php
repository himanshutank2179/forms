<table border="1" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
        <td colspan="8" width="568" align="center"><strong><em><br clear="all"/></em></strong>
            <h1 align="center" style="text-align: center;"><i>Corrective and Preventive Action Report</i></h1>
        </td>
        <td width="98">
            <p align="right" style="font-size: 27px;">F/QMS/06</p>
        </td>
    </tr>
    <tr>
        <td colspan="4" valign="top" width="337">
            <p style="font-size: 27px;">Sr. No. : <span style="font-size: 27px;"> <?= $model->corrective_action_plan_id ?></span></p>

        </td>
        <td colspan="5" valign="top" width="329">
            <p style="font-size: 27px;">Date: <span style="font-size: 27px;">
                <?= getExactField($model->date )?></span></p>

        </td>
    </tr>
    <tr>
        <td colspan="9" valign="top" width="666">
            <p style="font-size: 27px;">Department: </p>
            <p style="font-size: 27px;"><?= getExactField($model->department->name )?> </p>

        </td>
    </tr>
    <tr>
        <td colspan="9" valign="top" width="666">

            <p style="font-size: 27px;"><?= getExactField($model->non_confirmitie) ?></p>

        </td>
    </tr>
    <tr>
        <td colspan="9" valign="top" width="666">
            <p style="font-size: 27px;">Description of Non conformity:</p>
            <p style="font-size: 27px;">
                <?= getExactField($model->non_confirmitie_desc) ?>
            </p>

        </td>
    </tr>
    <tr>
        <td colspan="9" valign="top" width="666">
            <p style="font-size: 27px;">Root Cause of Non-conformitiy (Result of Investigation) :</p>
            <p style="font-size: 27px;"><?= getExactField($model->result_of_investigation) ?></p>

        </td>
    </tr>
    <tr>
        <td colspan="2" valign="top" width="204">
            <p style="font-size: 27px;">Date : <?= $model->date ?> </p>

        </td>
        <td colspan="7" valign="top" width="462">
            <p style="font-size: 27px;">Identified By:</p>
            <p style="font-size: 27px;">
                <?= getExactField(ucfirst($model->identifiedBy->name)) ?>
            </p>
        </td>
    </tr>
    <tr>
        <td colspan="7" valign="top" width="486">
            <p style="font-size: 27px;">C-Action Recommended</p>
            <p style="font-size: 27px;">

                <?= getExactField($model->c_action_recomand) ?>
            </p>
        </td>
<!--        <td colspan="2" valign="top" width="180">-->
<!--            <p align="center" style="font-size: 27px;">Responsibility</p>-->
<!--            --><?php ////getExactField($model->responsibility->responsibility) ?>
<!--        </td>-->
    </tr>
    <tr>
        <td colspan="9" valign="top" width="666">
            <p style="font-size: 27px;">C-Action Taken(Evidence)</p>
            <p style="font-size: 27px;">
                <?= $model->evidence ?>
            </p>

        </td>
    </tr>
    <tr>
        <td colspan="2" valign="top" width="204">
            <p style="font-size: 27px;">Date : <?= $model->date ?></p>

        </td>
        <td colspan="7" valign="top" width="462">
            <p style="font-size: 27px;">Taken By : <?= ucfirst($model->identifiedBy->name) ?></p>

        </td>
    </tr>
    <tr>
        <td colspan="9" valign="top" width="666">
            <p style="font-size: 27px;">Summary of Any Preventive Action Taken / Document Change etc. :</p>
            <p>&nbsp;</p>
            <p style="font-size: 27px;">
            <?= getExactField($model->document_change) ?>
            </p>
        </td>
    </tr>
    <tr>
        <td colspan="9" valign="top" width="666">
            <p style="font-size: 27px;">Review Effectiveness of Corrective &amp; Preventive Action Taken:</p>
            <p>&nbsp;</p>
            <p style="font-size: 27px;">
            <?= getExactField($model->correction_effect) ?>
            </p>
            <p>&nbsp;</p>
            <p style="font-size: 27px;">Sign of HOD/C-A implemented</p>
        </td>
    </tr>
    <tr>
        <td colspan="3" valign="top" width="333">
            <p style="font-size: 27px;">Date :</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        </td>
        <td colspan="6" valign="top" width="333">
            <p style="font-size: 27px;">&nbsp;</p>
            <p align="right" style="font-size: 27px;">Management Representative</p>
            <p align="right" style="font-size: 27px;"><?= getExactField($model->management_representative) ?></p>

        </td>
    </tr>
    <tr>
        <td valign="top" width="48">
            <ol>
                <li>&nbsp;</li>
            </ol>
        </td>
        <td colspan="4" valign="top" width="297">
            <p style="font-size: 27px;">Applicable Documentation</p>
            <p style="font-size: 27px;"><?= getExactField($model->applicable_doc) ?></p>

        </td>
        <td valign="top" width="133">
            <p align="center" style="font-size: 27px;">YES / NO</p>
        </td>
        <td colspan="3" valign="top" width="188">
            <p>&nbsp;</p>
        </td>
    </tr>
   
    </tbody>
</table>