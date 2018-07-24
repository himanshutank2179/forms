<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sppiler_evaluation".
 *
 * @property int $sppiler_evaluation_id
 * @property string $month Month
 * @property int $total_po Total no of P.O Issued
 * @property int $purchase_qty Purchase Qty
 * @property int $value Value
 * @property int $on_time_delevery Nos. of On Time Delivery
 * @property int $current_lot_size Nos of correct Lot Size
 * @property int $total_supplied Total Qty Supplied
 * @property int $accepted Accepted
 * @property int $rejected Rejected
 * @property string $first_performance Adherence to time Schedule Weighteage (40%)   -Delivery Performance   (No. Of delivery made on Schedule Datex40/Total no. Of Deliveries)
 * @property string $second_performance Adherence to Quantity Schedule (Weightage 20%) -(No. Of Correct lot Size deliveredx20/Total no. of Deliveries)
 * @property string $third_performance Quality Performance (Weight age 40%) (Quantity Accepted 40/Total Quantity Supplied)
 * @property string $total_marks Total Marks
 */
class SppilerEvaluation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sppiler_evaluation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['month', 'total_po', 'purchase_qty', 'value', 'on_time_delevery', 'current_lot_size', 'total_supplied', 'accepted', 'rejected', 'first_performance', 'second_performance', 'third_performance', 'total_marks'], 'required'],
            [['total_po', 'purchase_qty', 'value', 'on_time_delevery', 'current_lot_size', 'total_supplied', 'accepted', 'rejected'], 'integer'],
            [['month', 'first_performance', 'second_performance', 'third_performance', 'total_marks'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sppiler_evaluation_id' => 'Sppiler Evaluation ID',
            'month' => 'Month',
            'total_po' => 'Total no of P.O Issued',
            'purchase_qty' => 'Purchase Qty',
            'value' => 'Value',
            'on_time_delevery' => 'Nos. of On Time Delivery',
            'current_lot_size' => 'Nos of correct Lot Size',
            'total_supplied' => 'Total Qty Supplied',
            'accepted' => 'Accepted',
            'rejected' => 'Rejected',
            'first_performance' => 'Adherence to time Schedule Weighteage (40%)   -Delivery Performance   (No. Of delivery made on Schedule Datex40/Total no. Of Deliveries)',
            'second_performance' => 'Adherence to Quantity Schedule (Weightage 20%) -(No. Of Correct lot Size deliveredx20/Total no. of Deliveries)',
            'third_performance' => 'Quality Performance (Weight age 40%) (Quantity Accepted 40/Total Quantity Supplied)',
            'total_marks' => 'Total Marks',
        ];
    }
}
