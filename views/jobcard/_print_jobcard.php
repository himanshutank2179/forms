<?php
use app\models\JobcardOperationParameter;
/*debugPrint($jobcard);*/
//debugPrint($jobcard->jobcardOperationDetails);

?>
<table style="border-collapse: collapse; width: 764pt; font-size: 20px; text-align: center;" width="100%" border="1">
    <tbody>
    <tr style="height: 33.0pt;">
        <td style="border-right: 1.0pt solid black; height: 33.0pt; width: 764pt;" colspan="8" width="1017"><b>Job
                card</b></td>
    </tr>
    <tr style="height: 42.75pt;">
        <th style="height: 42.75pt; border-top: none;">Job card No-NVIL/JC No&nbsp;&nbsp;</th>
        <th style="border-top: none; border-left: none;">date</th>
        <th style="border-top: none; border-left: none;">Product</th>
        <th style="border-top: none; border-left: none;">Customer Order No</th>
        <th style="border-top: none; border-left: none;">Work Order No</th>
        <th style="border-top: none; border-left: none;">Require quantity</th>
        <th style="border-top: none; border-left: none;">Require Delivery Date</th>
        <th style="border-top: none; border-left: none;">Technical speciation or Drawing No</th>
    </tr>
    <tr style="height: 26.25pt;">
        <td style="height: 26.25pt; border-top: none;"><?= getExactField($jobcard->jobcard_id); ?></td>
        <td style="border-top: none;"><?= getExactField(formatedDate($jobcard->date)); ?></td>
        <td style="border-top: none;"><?= getExactField($jobcard->finishProduct->product_name); ?></td>
        <td style="border-top: none;">43</td>0
        <td style="border-top: none;">43</td>
        <td style="border-top: none;"><?= getExactField($jobcard->qty); ?></td>
        <td style="border-top: none;"><?= getExactField(formatedDate($jobcard->date)); ?></td>
        <td style="border-top: none;"><?= getExactField($jobcard->product_description); ?></td>
    </tr>
    <tr style="height: 27.0pt;">
        <th style="height: 27.0pt; border-top: none;">Part&nbsp; /s</th>
        <th style="border-top: none; border-left: none;">Qunatity&nbsp;</th>
        <th style="border-top: none; border-left: none;">Incoming QC report No.</th>
        <th style="border-top: none; border-left: none;">Job-Porcess ID</th>
        <th style="border-top: none; border-left: none;">Machine ID</th>
        <th style="border-top: none; border-left: none;">Operator ID</th>
        <th style="border-top: none; border-left: none;">Date of start</th>
        <th style="border-top: none; border-left: none;">Date of Finish&nbsp;</th>
    </tr>


    <?php foreach ($jobcard->jobcardOperationDetails as $detail): ?>


        <?php /*debugPrint($detail) */?>

        <tr style="height: 40.5pt;">
            <td style="height: 40.5pt; border-top: none;"><?= getExactField($detail->product->product_name); ?></td>
            <td style="border-top: none;"><?= getExactField($detail->qty) ?></td>
            <td style="border-top: none;"><?= getExactField($detail->in_process_qc_no) ?></td>
            <td style="border-top: none;"><?= getExactField($detail->operation->name) ?></td>
            <td style="border-top: none;"><?= getExactField($detail->m_ch_ve) ?></td>

            <td style="border-top: none;"><?= getExactField($detail->operator) ?></td>
            <td style="border-top: none;"><?= getExactField(formatedDate($detail->start_from)); ?></td>
            <td style="border-top: none;"><?= getExactField(formatedDate($detail->end_to)); ?></td>

        </tr>

        


    <?php endforeach; ?>

    <tr style="height: 45.0pt;">
        <th style="height: 45.0pt; border-top: none;">Part&nbsp; /s-ID No</th>
        <th style="border-top: none; border-left: none;">In-process QC_paramter</th>
        <th style="border-top: none; border-left: none;">Tolerances</th>
        <th style="border-top: none; border-left: none;">Instrument ID</th>
        <th style="border-top: none; border-left: none;">Ist PC-QC result</th>
        <th style="border-top: none; border-left: none;">2ed Random-QC Result</th>
        <th style="border-top: none; border-left: none;">3 rendom-QC Result</th>
        <th style="border-top: none; border-left: none;">Averages</th>
    </tr>

    <?php
        foreach ($jobcard->jobcardOperationDetails as $detail):
        $jobcardOperationParameter = JobcardOperationParameter::find()->where(['jobcard_operation_detail_id'=>$detail->jobcard_operation_detail_id])->all();
    ?>
    <?php foreach ($jobcardOperationParameter as $key => $parameter): ?>

        <tr style="height: 38.25pt;">
        <td style="height: 38.25pt;"><?= getExactField($parameter->product_id) ?></td>
        <td><?= getExactField($parameter->inprocess_qc_paramter) ?></td>
        <td><?= getExactField($parameter->unit) ?></td>
        <td><?= getExactField($parameter->instrument_id) ?></td>
        <td><?= getExactField($parameter->first_qc_result) ?></td>
        <td><?= getExactField($parameter->second_qc_result) ?></td>
        <td><?= getExactField($parameter->third_qc_result) ?></td>
        <td><?= getExactField($parameter->averages) ?></td>
    </tr>

    <?php endforeach; ?>
    <?php endforeach; ?>
    
    


    <!-- <tr style="height: 38.25pt;">
        <td style="height: 38.25pt;">2RPC-TP-BV-4308</td>
        <td>20 &micro; finish as per Ref pc</td>
        <td>5&micro;</td>
        <td>VC-01</td>
        <td>19</td>
        <td>18</td>
        <td>19</td>
        <td>18.67</td>
    </tr>
    <tr style="height: 38.25pt;">
        <td style="height: 38.25pt;">3RPC-TP-BV-4311</td>
        <td>20 &micro; finish as per Ref pc</td>
        <td>5&micro;</td>
        <td>VC-01</td>
        <td>19</td>
        <td>18</td>
        <td>19</td>
        <td>18.67</td>
    </tr>
    <tr style="height: 38.25pt;">
        <td style="height: 38.25pt;">16PC-TP-BV-4316</td>
        <td>20 &micro; finish as per Ref pc</td>
        <td>5&micro;</td>
        <td>VC-01</td>
        <td>27</td>
        <td>26</td>
        <td>25</td>
        <td>26.00</td>
    </tr> -->
    <tr style="height: 40.5pt;">
        <th style="height: 40.5pt; border-top: none;">OK Qunatity</th>
        <th style="border-top: none; border-left: none;">Qty to rework</th>
        <th style="border-top: none; border-left: none;">Qty Reject</th>
        <th style="border-top: none; border-left: none;">Total&nbsp; Qty produce</th>
        <th style="border-top: none; border-left: none;">Qty deposit to store</th>
        <th style="border-top: none; border-left: none;">Qty for Re-work on hand</th>
        <th style="border-top: none; border-left: none;">Reject Qty deposit to scrap</th>
        <th style="border-top: none; border-left: none;">Quality Inspector</th>
    </tr>
    <tr style="height: 15.0pt;">
        <td style="height: 15.0pt;">23</td>
        <td>1</td>
        <td>1</td>
        <td>25</td>
        <td>23</td>
        <td>1</td>
        <td>1</td>
        <td>SKV</td>
    </tr>
    <tr style="height: 15.75pt;">
        <td style="height: 15.75pt;">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr style="height: 15.0pt;">
        <th style="height: 15.0pt;">Remarks:</th>
        <td style="border-right: 1.0pt solid black; border-left: none;" colspan="7">19PC-TP-BV-4319- Rework for more
            m/chining,
        </td>
    </tr>
    <tr style="height: 15.0pt;">
        <th style="height: 15.0pt; border-top: none;">Sign&nbsp;</th>
        <td colspan="6">&nbsp;</td>

    </tr>
    <tr style="height: 15.0pt;">
        <td style="height: 15.0pt; border-top: none;">Name</td>
        <td>Nilesh</td>
        <td>&nbsp;</td>
        <td>SKV</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Jimesh&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr style="height: 15.0pt;">
        <td style="height: 15.0pt; border-top: none;">Designation</td>
        <td style="border-left: none;">Prod&nbsp; Supervisor</td>
        <td>&nbsp;</td>
        <td>QC-Engineer</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Prod In-chage</td>
        <td>&nbsp;</td>
    </tr>
    <tr style="height: 15.75pt;">
        <td style="height: 15.75pt; border-top: none;">Date</td>
        <td>15-08-19</td>
        <td>&nbsp;</td>
        <td>15-08-18</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>15-08-18</td>
        <td>&nbsp;</td>
    </tr>
    </tbody>
</table>