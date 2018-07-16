<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "work_order_products".
 *
 * @property int $work_order_product_id
 * @property int $product_id
 * @property string $drawing_no
 * @property int $required_qty
 * @property string $delivery_required_at
 * @property string $job_card_no
 * @property string $actual_qty
 * @property string $pending
 */
class WorkOrderProducts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'work_order_products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'drawing_no', 'required_qty', 'delivery_required_at', 'job_card_no', 'actual_qty', 'pending'], 'required'],
            [['product_id', 'required_qty'], 'integer'],
            [['drawing_no', 'delivery_required_at', 'job_card_no', 'actual_qty', 'pending'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'work_order_product_id' => 'Work Order Product ID',
            'product_id' => 'Product ID',
            'drawing_no' => 'Drawing No',
            'required_qty' => 'Required Qty',
            'delivery_required_at' => 'Delivery Required At',
            'job_card_no' => 'Job Card No',
            'actual_qty' => 'Actual Qty',
            'pending' => 'Pending',
        ];
    }
}
