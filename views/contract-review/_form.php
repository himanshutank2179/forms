<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ContractReview */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
    td {
        padding: 0;
        margin: 0;
    }

    td .form-group {
        margin-bottom: -10px;
    }

    input {
        border: none;
    }

    .content-wrapper {
        background: white;
    }

    tbody tr th:nth-child(2) {
        width: 25%;

    }
    .changeview{ margin-bottom: 20px; }
    .tableview{ display: block; }
    .regularview{ display: none; }

</style>

<div class="contract-review-form">



    <button class="btn btn-success pull-right changeview">Change View</button>



    <?php $form = ActiveForm::begin(); ?>


    <div class="tableview">
        <table border="1" width="100%">
            <thead>
            <tr>
                <th>Sr.No</th>
                <th>Item</th>
                <th>Detail</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>1</th>
                <th>Name Of Customer</th>
                <td><?= $form->field($model, 'customer_name')->textInput(['maxlength' => true])->label(false) ?></td>
            </tr>

            <tr>
                <th>2</th>
                <th>Address</th>
                <td><?= $form->field($model, 'address')->textarea(['rows' => 6])->label(false) ?></td>
            </tr>

            <tr>
                <th>3</th>
                <th>Street/Moholla</th>
                <td><?= $form->field($model, 'street')->textInput(['maxlength' => true])->label(false) ?></td>
            </tr>

            <tr>
                <th>4</th>
                <th>City</th>
                <td><?= $form->field($model, 'city')->textInput(['maxlength' => true])->label(false) ?></td>
            </tr>

            <tr>
                <th>5</th>
                <th>Country</th>
                <td><?= $form->field($model, 'country')->textInput(['maxlength' => true])->label(false) ?></td>
            </tr>

            <tr>
                <th>6</th>
                <th>City pin code</th>
                <td><?= $form->field($model, 'pincode')->textInput(['maxlength' => true])->label(false) ?></td>
            </tr>

            <tr>
                <th>7</th>
                <th>Phone(std code)</th>
                <td><?= $form->field($model, 'phone')->textInput(['maxlength' => true])->label(false) ?></td>
            </tr>

            <tr>
                <th>8</th>
                <th>Fax No</th>
                <td><?= $form->field($model, 'fax_no')->textInput(['maxlength' => true])->label(false) ?></td>
            </tr>

            <tr>
                <th>9</th>
                <th>E-mail</th>
                <td><?= $form->field($model, 'email')->textInput(['maxlength' => true])->label(false) ?></td>
            </tr>

            <tr>
                <th>10</th>
                <th>Name of Contact person</th>
                <td><?= $form->field($model, 'contact_person_name')->textInput(['maxlength' => true])->label(false) ?></td>
            </tr>

            <tr>
                <th>11</th>
                <th>Designation</th>
                <td><?= $form->field($model, 'designation')->textInput(['maxlength' => true])->label(false) ?></td>
            </tr>

            <tr>
                <th>12</th>
                <th>Phone/mobile no</th>
                <td><?= $form->field($model, 'mobile')->textInput(['maxlength' => true])->label(false) ?></td>
            </tr>

            <tr>
                <th>13</th>
                <th>Customer Purchase order No&Date</th>
                <td><?= $form->field($model, 'purchase_order_no')->textarea(['rows' => 6])->label(false) ?></td>
            </tr>

            <tr>
                <th>14</th>
                <th>Item Description</th>
                <td><?= $form->field($model, 'item_description')->textarea(['rows' => 6])->label(false) ?></td>
            </tr>

            <tr>
                <th>15</th>
                <th>Qty</th>
                <td><?= $form->field($model, 'qty')->textarea(['rows' => 6])->label(false) ?></td>
            </tr>

            <tr>
                <th>16</th>
                <th>Requirement of Testing/test certificate</th>
                <td><?= $form->field($model, 'testing_requirements')->textarea(['rows' => 6])->label(false) ?></td>
            </tr>

            <tr>
                <th>17</th>
                <th>Delivery period</th>
                <td><?= $form->field($model, 'delivery_period')->textarea(['rows' => 6])->label(false) ?></td>
            </tr>

            <tr>
                <th>18</th>
                <th>Mode of Dispatch</th>
                <td><?= $form->field($model, 'mode_of_dispatch')->textarea(['rows' => 6])->label(false) ?></td>
            </tr>

            <tr>
                <th>19</th>
                <th>Insurance</th>
                <td><?= $form->field($model, 'mode_of_dispatch')->textarea(['rows' => 6])->label(false) ?></td>
            </tr>

            <tr>
                <th>20</th>
                <th>Insurance</th>
                <td><?= $form->field($model, 'insurance')->textarea(['rows' => 6])->label(false) ?></td>
            </tr>


            <tr>
                <th>21</th>
                <th>Other terms & Condition</th>
                <td><?= $form->field($model, 'payment')->textarea(['rows' => 6])->label(false) ?></td>
            </tr>

            <tr>
                <th>22</th>
                <th>Packing terms</th>
                <td><?= $form->field($model, 'packing_terms')->textarea(['rows' => 6])->label(false) ?></td>
            </tr>


            <tr>
                <th>23</th>
                <th>Other terms & Condition</th>
                <td><?= $form->field($model, 'other_terms_and_condition')->textarea(['rows' => 6])->label(false) ?></td>
            </tr>

            <tr>
                <th>24</th>
                <th>CRI’s Quotation No& date</th>
                <td><?= $form->field($model, 'cir_quotation_no')->textarea(['rows' => 6])->label(false) ?></td>
            </tr>

            <tr>
                <th>25</th>
                <th>Communication of Order Conformation No& date</th>
                <td><?= $form->field($model, 'communication_of_order_conformation_no_date')->textarea(['rows' => 6])->label(false) ?></td>
            </tr>

            <tr>
                <th>26</th>
                <th>Terms & condition Reviewed Detail</th>
                <td><?= $form->field($model, 'terms_condition_reviewed_detail')->textInput()->label(false) ?></td>
            </tr>

            <tr>
                <th>27</th>
                <th>Material Specification</th>
                <td><?= $form->field($model, 'material_specification')->textarea(['rows' => 6])->label(false) ?></td>
            </tr>

            <tr>
                <th>28</th>
                <th>Test Specification/Test certificate</th>
                <td><?= $form->field($model, 'test_specification')->textarea(['rows' => 6])->label(false) ?></td>
            </tr>

            <tr>
                <th>29</th>
                <th>Mode of Transport</th>
                <td><?= $form->field($model, 'mode_of_transport')->textarea(['rows' => 6])->label(false) ?></td>
            </tr>

            <tr>
                <th>30</th>
                <th></th>
                <td><?= $form->field($model, 'reference_date_of_communicate_about_order_ready_for_inspection')->textarea(['rows' => 6])->label(false) ?></td>
            </tr>

            <tr>
                <th>31</th>
                <th>BGIENGITECH’s Reference & Date of Communicate about Order ready for inspection</th>
                <td><?= $form->field($model, 'reference_date_of_communicate_about_order_ready_for_inspection')->textarea(['rows' => 6])->label(false) ?></td>
            </tr>

            <tr>
                <th>32</th>
                <th>BGIENGITECH’s Reference &Date about Dispatch of Material(Dispatch Particulars)</th>
                <td><?= $form->field($model, 'reference_date_about_dispatch_of_material')->textarea(['rows' => 6])->label(false) ?></td>
            </tr>

            <tr>
                <th>33</th>
                <th>Conformation about Satisfactory receipt of ordered item and qty</th>
                <td><?= $form->field($model, 'conformation_about_satisfactory_receipt_of_ordered_item_and_qty')->textarea(['rows' => 6])->label(false) ?></td>
            </tr>


            </tbody>
        </table>
    </div>

    <div class="regularview">
        <div class="row">
            <div class="col-md-3">
                <label for="">Name Of Customer</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'customer_name')->textInput(['maxlength' => true])->label(false) ?></div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Address</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'address')->textarea(['rows' => 6])->label(false)  ?></div>
        </div>
        <div class="clearfix"></div>


        <div class="row">
            <div class="col-md-3">
                <label for="">Street</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'street')->textInput(['maxlength' => true])->label(false)  ?></div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">City</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'city')->textInput(['maxlength' => true])->label(false)  ?></div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Country</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'country')->textInput(['maxlength' => true])->label(false)  ?></div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Pincode</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'pincode')->textInput(['maxlength' => true])->label(false)  ?></div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Phone</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'phone')->textInput(['maxlength' => true])->label(false)  ?></div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Fax No</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'fax_no')->textInput(['maxlength' => true])->label(false)  ?></div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Email</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'email')->textInput(['maxlength' => true])->label(false)  ?></div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Contact Person Name</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'contact_person_name')->textInput(['maxlength' => true])->label(false) ?></div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Designation</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'designation')->textInput(['maxlength' => true])->label(false)  ?></div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Mobile</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'mobile')->textInput(['maxlength' => true])->label(false) ?></div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Purchase Order No</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'purchase_order_no')->textarea(['rows' => 6])->label(false) ?></div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Item Description</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'item_description')->textarea(['rows' => 6])->label(false)  ?></div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Quantity</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'qty')->textarea(['rows' => 6])->label(false)  ?></div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Testing Requirements</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'testing_requirements')->textarea(['rows' => 6])->label(false)  ?></div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Delivery Period</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'delivery_period')->textarea(['rows' => 6])->label(false)  ?></div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Mode Of Dispatch</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'mode_of_dispatch')->textarea(['rows' => 6])->label(false)  ?></div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Insurance</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'insurance')->textarea(['rows' => 6])->label(false)  ?></div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Payment</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'payment')->textarea(['rows' => 6])->label(false)  ?> </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Packing Terms</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'packing_terms')->textarea(['rows' => 6])->label(false)  ?> </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Other Terms and Condition</label>
            </div>
            <div class="col-md-5"> <?= $form->field($model, 'other_terms_and_condition')->textarea(['rows' => 6])->label(false) ?></div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Cir Quotation No</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'cir_quotation_no')->textarea(['rows' => 6])->label(false)  ?> </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Communication of Order Conformation No. Date</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'communication_of_order_conformation_no_date')->textarea(['rows' => 6])->label(false)  ?> </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Terms Conditon Reviewed Detail</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'terms_condition_reviewed_detail')->textInput()->label(false)  ?> </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Material Specification</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'material_specification')->textarea(['rows' => 6])->label(false)  ?> </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Test Specification</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'test_specification')->textarea(['rows' => 6])->label(false)  ?> </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Mode of Transport</label>
            </div>
            <div class="col-md-5"> <?= $form->field($model, 'mode_of_transport')->textarea(['rows' => 6])->label(false)  ?></div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Reference Date Of Communicate About Order Ready For Inspection</label>
            </div>
            <div class="col-md-5"> <?= $form->field($model, 'reference_date_of_communicate_about_order_ready_for_inspection')->textarea(['rows' => 6])->label(false)  ?></div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Reference Date About Dispatch Of Material</label>
            </div>
            <div class="col-md-5"> <?= $form->field($model, 'reference_date_about_dispatch_of_material')->textarea(['rows' => 6])->label(false)  ?></div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <label for="">Conformation About Satisfactory Receipt Of Ordered Item And Qty</label>
            </div>
            <div class="col-md-5"><?= $form->field($model, 'conformation_about_satisfactory_receipt_of_ordered_item_and_qty')->textarea(['rows' => 6])->label(false)  ?> </div>
        </div>
        <div class="clearfix"></div>



    </div>

    <br>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$this->registerJs("
$('#contractreview-terms_condition_reviewed_detail').select2();
    $('.changeview').click(function(){
        $('.tableview').toggle();
        $('.regularview').toggle();
    });
", \yii\web\View::POS_END);

?>
