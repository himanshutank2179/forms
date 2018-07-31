<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "quotation_products".
 *
 * @property int $quotation_product_id
 * @property int $product_id
 * @property int $order_quotation_id
 * @property int $quantity
 * @property double $rate
 * @property double $sgst
 * @property double $cgst
 * @property double $igst
 * @property double $gst
 * @property double $total_amount
 * @property double $total_gst
 *
 * @property ProductMaster $product
 * @property OrderQuotation $orderQuotation
 */
class QuotationProducts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quotation_products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'order_quotation_id', 'quantity', 'rate', 'sgst', 'cgst', 'igst', 'gst', 'total_amount', 'total_gst'], 'required'],
            [['product_id', 'order_quotation_id', 'quantity', 'rate', 'sgst', 'cgst', 'igst', 'gst', 'total_amount', 'total_gst'], 'safe','on'=>'requirements'],
            [['product_id', 'order_quotation_id', 'quantity'], 'integer'],
            [['rate', 'sgst', 'cgst', 'igst', 'gst', 'total_amount', 'total_gst'], 'number'],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductMaster::className(), 'targetAttribute' => ['product_id' => 'product_master_id']],
            [['order_quotation_id'], 'exist', 'skipOnError' => true, 'targetClass' => OrderQuotation::className(), 'targetAttribute' => ['order_quotation_id' => 'order_quotation_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'quotation_product_id' => 'Quotation Product ID',
            'product_id' => 'Product ID',
            'order_quotation_id' => 'Order Quotation ID',
            'quantity' => 'Quantity',
            'rate' => 'Rate',
            'sgst' => 'Sgst',
            'cgst' => 'Cgst',
            'igst' => 'Igst',
            'gst' => 'Gst',
            'total_amount' => 'Total Amount',
            'total_gst' => 'Total Gst',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(ProductMaster::className(), ['product_master_id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderQuotation()
    {
        return $this->hasOne(OrderQuotation::className(), ['order_quotation_id' => 'order_quotation_id']);
    }
}
