<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "purchase_receipt".
 *
 * @property int $purchase_receipt_id
 * @property string $GRN_NO
 * @property string $po_no
 * @property int $product_id
 * @property string $unit
 * @property int $receive_qty
 * @property int $rejected_qty
 * @property int $accepted_qty
 * @property int $unit_price
 * @property string $order_no
 * @property string $gst
 * @property double $cgst
 * @property double $sgst
 * @property double $igst
 * @property double $total_amount
 * @property string $remark
 * @property int $is_approved
 * @property string $created_at
 */
class PurchaseReceipt extends \yii\db\ActiveRecord
{
    public $isInterState;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'purchase_receipt';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['GRN_NO', 'product_id', 'unit', 'receive_qty', 'rejected_qty', 'accepted_qty', 'unit_price',  'total_amount','gst'], 'required'],
            [['product_id', 'receive_qty', 'rejected_qty', 'accepted_qty'], 'integer'],
            [['cgst', 'sgst', 'igst', 'total_amount','gst','is_approved','isInterState'], 'number'],
            [['remark','created_at'], 'string'],
            [['cgst', 'sgst', 'igst','gst','unit_price'], 'safe'],
            [['GRN_NO', 'unit', 'order_no'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'purchase_receipt_id' => 'Purchase Receipt ID',
            'GRN_NO' => 'GRN NO.',
            'po_no' => 'PO NO.',
            'product_id' => 'Product',
            'unit' => 'Unit',
            'receive_qty' => 'Receive Quantity',
            'rejected_qty' => 'Rejected Quantity',
            'accepted_qty' => 'Accepted Quantity',
            'unit_price' => 'Unit Price',
            'order_no' => 'Order No',
            'cgst' => 'CGST',
            'sgst' => 'SGST',
            'igst' => 'IGST',
            'gst'=>'GST(%)',
            'total_amount' => 'Total Amount',
            'remark' => 'Remark',
            'is_approved' => 'Is approved',
        ];
    }
    public function getProduct()
    {
        return $this->hasOne(ProductMaster::className(), ['product_master_id' => 'product_id']);
    }
}
