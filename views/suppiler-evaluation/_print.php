
<table width="100%" border="1"  style="border-collapse: collapse; border: 1px solid black; text-align: left;">
    <tr>
        <td colspan="13"  style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <p><center><h2>BGI ENGITECH PVT LTD-AHMEDABAD</h2></center></p>
        </td>
    </tr>
    <tr>
        <td colspan="13"  style=" border: 1px solid black; padding: 0px 0px 0px 0px;margin: 0px 0px 0px 0px;">
            <p><center><h3>Supplier evaluation form: year 200   to 200 </h3></center></p>
        </td>
    </tr>
    <tr>
        <td colspan="11"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Name of Vender(Supplier) & Address : </p>
        </td>
        <td colspan="2" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Date :</p>
        </td>
    </tr>
    <tr>
        <td rowspan="2" width="8%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Month</p>
        </td>
        <td rowspan="2" width="5%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Total no of P.O Issued</p>
        </td>
        <td rowspan="2" width="5%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Purchase Qty</p>
        </td>
        <td rowspan="2" width="5%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Value</p>
        </td>
        <td rowspan="2" width="5%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Nos. of On Time Delivery</p>
        </td>
        <td rowspan="2" width="5%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Nos of correct Lot Size</p>
        </td>
        <td rowspan="2" width="5%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Total Qty Supplied</p>
        </td>
        <td colspan="2" width="7%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Qty of  receipt material</p>
        </td>
        <td rowspan="2" width="15%"  style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Adherence to time Schedule Weighteage (40%)   -Delivery Performance   (No. Of delivery made on Schedule Datex40/Total no. Of Deliveries)</p>
        </td>
        <td rowspan="2" width="15%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Adherence to Quantity Schedule (Weightage 20%) -(No. Of Correct lot Size deliveredx20/Total no. of Deliveries)</p>
        </td>
        <td rowspan="2" width="15%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Quality Performance (Weight age 40%) (Quantity Accepted 40/Total Quantity Supplied)</p>
        </td>
        <td rowspan="2" width="5%" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Total Marks</p>
        </td>
    </tr>
    <tr>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Accepted</p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Rejected</p>
        </td>
    </tr>
    <tr>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($suppile->month) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($suppile->total_po) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($suppile->purchase_qty) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($suppile->value) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($suppile->on_time_delevery) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($suppile->current_lot_size) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($suppile->total_supplied) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($suppile->accepted) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($suppile->rejected) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($suppile->first_performance) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($suppile->second_performance) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($suppile->third_performance) ?></p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p><?= getExactField($suppile->total_marks) ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="13" style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>1.	Deviation within 7days to be ignored<br/>
                **	Deviation within 5% lot Quantity to be ignored<br/>
                #	Rejected quantity resupplied after rectification/sorting out to be treated as fresh supply.
            </p>
        </td>
    </tr>

</table>