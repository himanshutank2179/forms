<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_amendment".
 *
 * @property int $order_amendment_id
 * @property string $purchase_order_no
 * @property string $date
 * @property string $quotation_ref_no
 * @property string $revised_terms
 * @property string $total
 * @property string $delivery_period
 * @property string $delivery_required_at
 * @property string $made_of_dispatch
 * @property string $payment_terms
 * @property string $insurance
 * @property string $inspected_by
 * @property string $approved_by
 * @property int $is_deleted
 * @property string $created_at
 */
class OrderAmendment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_amendment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['purchase_order_no', 'date', 'quotation_ref_no', 'revised_terms', 'total', 'delivery_period', 'delivery_required_at', 'made_of_dispatch', 'payment_terms', 'insurance', 'inspected_by', 'approved_by', 'created_at'], 'required'],
            [['date', 'created_at'], 'safe'],
            [['revised_terms', 'payment_terms'], 'string'],
            [['is_deleted'], 'integer'],
            [['purchase_order_no', 'quotation_ref_no', 'total', 'delivery_period', 'delivery_required_at', 'made_of_dispatch', 'insurance', 'inspected_by', 'approved_by'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'order_amendment_id' => 'Order Amendment ID',
            'purchase_order_no' => 'Purchase Order No',
            'date' => 'Date',
            'quotation_ref_no' => 'Quotation Ref No',
            'revised_terms' => 'Revised Terms',
            'total' => 'Total',
            'delivery_period' => 'Delivery Period',
            'delivery_required_at' => 'Delivery Required At',
            'made_of_dispatch' => 'Made Of Dispatch',
            'payment_terms' => 'Payment Terms',
            'insurance' => 'Insurance',
            'inspected_by' => 'Inspected By',
            'approved_by' => 'Approved By',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
        ];
    }
}
