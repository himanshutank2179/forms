<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer_complaint_record".
 *
 * @property int $customer_complaint_record_id
 * @property string $date
 * @property string $customer_name
 * @property string $customer_address
 * @property string $reference
 * @property string $type_of_complaint
 * @property string $product_name
 * @property string $c_responsibility
 * @property string $c_cataken
 * @property string $c_sign
 * @property string $p_responsibility
 * @property string $p_cataken
 * @property string $p_sign
 */
class CustomerComplaintRecord extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer_complaint_record';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['customer_name', 'customer_address', 'reference', 'type_of_complaint', 'product_name', 'c_responsibility', 'c_cataken', 'c_sign', 'p_responsibility', 'p_cataken', 'p_sign'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'customer_complaint_record_id' => 'Customer Complaint Record ID',
            'date' => 'Date',
            'customer_name' => 'Customer Name',
            'customer_address' => 'Customer Address',
            'reference' => 'Reference',
            'type_of_complaint' => 'Type Of Complaint',
            'product_name' => 'Product Name',
            'c_responsibility' => 'Corrective Responsibility',
            'c_cataken' => 'Corrective Cataken',
            'c_sign' => 'Corrective Sign',
            'p_responsibility' => 'Preventive Responsibility',
            'p_cataken' => 'Preventive Cataken',
            'p_sign' => 'Preventive Sign',
        ];
    }
}
