<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "purchase_order".
 *
 * @property int $purchase_order_id
 * @property int $product_id
 * @property int $vendor_id
 * @property string $po_no
 * @property int $qty
 * @property double $unit_price
 * @property string $created_at
 * @property string $quote_ref_no
 * @property string $terms
 * @property string $delivery_period
 * @property string $delivery_required_at
 * @property string $mode_of_dispatch
 * @property string $payment_terms
 * @property string $inspection_by
 * @property string $gst
 * @property string $cgst
 * @property string $sgst
 * @property string $igst
 */
class PurchaseOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'purchase_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'vendor_id', 'po_no', 'qty', 'unit_price', 'created_at'], 'required'],
            [['quote_ref_no', 'terms', 'delivery_period', 'delivery_required_at', 'mode_of_dispatch', 'payment_terms'], 'safe'],
            [['inspection_by', 'gst','cgst','sgst','igst'], 'safe'],
            [['product_id', 'vendor_id', 'qty'], 'integer'],
            [['unit_price'], 'number'],
            [['created_at'], 'safe'],
            [['po_no'], 'string', 'max' => 255],
        ];
    }

    public function getProduct()
    {
        return $this->hasOne(ProductMaster::className(), ['product_master_id' => 'product_id']);
    }

    public function getVendor()
    {
        return $this->hasOne(Vendors::className(), ['vendor_id' => 'vendor_id']);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'purchase_order_id' => 'Purchase Order ID',
            'product_id' => 'Product',
            'vendor_id' => 'Vendor',
            'po_no' => 'Purchase Number',
            'qty' => 'Quantity',
            'unit_price' => 'Unit Price',
            'terms' => 'Terms & Condition',
            'created_at' => 'Created At',
        ];
    }
}
