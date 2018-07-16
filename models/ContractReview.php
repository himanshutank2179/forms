<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contract_review".
 *
 * @property int $contract_review_id
 * @property string $customer_name
 * @property string $address
 * @property string $street
 * @property string $city
 * @property string $country
 * @property string $pincode
 * @property string $phone
 * @property string $fax_no
 * @property string $email
 * @property string $contact_person_name
 * @property string $designation
 * @property string $mobile
 * @property string $purchase_order_no
 * @property string $item_description
 * @property string $qty
 * @property string $testing_requirements
 * @property string $delivery_period
 * @property string $mode_of_dispatch
 * @property string $insurance
 * @property string $payment
 * @property string $packing_terms
 * @property string $other_terms_and_condition
 * @property string $cir_quotation_no
 * @property string $communication_of_order_conformation_no_date
 * @property int $terms_condition_reviewed_detail
 * @property string $material_specification
 * @property string $test_specification
 * @property string $mode_of_transport
 * @property string $reference_date_of_communicate_about_order_ready_for_inspection
 * @property string $reference_date_about_dispatch_of_material
 * @property string $conformation_about_satisfactory_receipt_of_ordered_item_and_qty
 */
class ContractReview extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contract_review';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_name', 'address', 'street', 'city', 'country', 'pincode', 'phone', 'fax_no', 'email', 'contact_person_name', 'designation', 'mobile', 'purchase_order_no', 'item_description', 'qty', 'testing_requirements', 'delivery_period', 'mode_of_dispatch', 'insurance', 'payment', 'packing_terms', 'other_terms_and_condition', 'cir_quotation_no', 'communication_of_order_conformation_no_date', 'terms_condition_reviewed_detail', 'material_specification', 'test_specification', 'mode_of_transport', 'reference_date_of_communicate_about_order_ready_for_inspection', 'reference_date_about_dispatch_of_material', 'conformation_about_satisfactory_receipt_of_ordered_item_and_qty'], 'safe'],
            [['address', 'purchase_order_no', 'item_description', 'qty', 'testing_requirements', 'delivery_period', 'mode_of_dispatch', 'insurance', 'payment', 'packing_terms', 'other_terms_and_condition', 'cir_quotation_no', 'communication_of_order_conformation_no_date', 'material_specification', 'test_specification', 'mode_of_transport', 'reference_date_of_communicate_about_order_ready_for_inspection', 'reference_date_about_dispatch_of_material', 'conformation_about_satisfactory_receipt_of_ordered_item_and_qty'], 'string'],
            [['terms_condition_reviewed_detail'], 'string'],
            [['customer_name', 'street', 'country', 'designation'], 'string', 'max' => 255],
            [['city', 'phone', 'fax_no', 'email', 'contact_person_name'], 'string', 'max' => 200],
            [['pincode'], 'string', 'max' => 10],
            [['mobile'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'contract_review_id' => 'Contract Review ID',
            'customer_name' => 'Customer Name',
            'address' => 'Address',
            'street' => 'Street',
            'city' => 'City',
            'country' => 'Country',
            'pincode' => 'Pincode',
            'phone' => 'Phone',
            'fax_no' => 'Fax No',
            'email' => 'Email',
            'contact_person_name' => 'Contact Person Name',
            'designation' => 'Designation',
            'mobile' => 'Mobile',
            'purchase_order_no' => 'Purchase Order No',
            'item_description' => 'Item Description',
            'qty' => 'Qty',
            'testing_requirements' => 'Testing Requirements',
            'delivery_period' => 'Delivery Period',
            'mode_of_dispatch' => 'Mode Of Dispatch',
            'insurance' => 'Insurance',
            'payment' => 'Payment',
            'packing_terms' => 'Packing Terms',
            'other_terms_and_condition' => 'Other Terms And Condition',
            'cir_quotation_no' => 'Cir Quotation No',
            'communication_of_order_conformation_no_date' => 'Communication Of Order Conformation No Date',
            'terms_condition_reviewed_detail' => 'Terms Condition Reviewed Detail',
            'material_specification' => 'Material Specification',
            'test_specification' => 'Test Specification',
            'mode_of_transport' => 'Mode Of Transport',
            'reference_date_of_communicate_about_order_ready_for_inspection' => 'Reference Date Of Communicate About Order Ready For Inspection',
            'reference_date_about_dispatch_of_material' => 'Reference Date About Dispatch Of Material',
            'conformation_about_satisfactory_receipt_of_ordered_item_and_qty' => 'Conformation About Satisfactory Receipt Of Ordered Item And Qty',
        ];
    }
}
