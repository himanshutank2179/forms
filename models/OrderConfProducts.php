<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_conf_products".
 *
 * @property int $order_conf_product_id
 * @property int $product_id
 * @property int $order_conformation_id
 * @property int $quantity
 * @property double $rate
 * @property double $sgst
 * @property double $cgst
 * @property double $igst
 * @property double $gst
 * @property double $total_amount
 * @property double $total_gst
 *
 * @property ProcessMaster $product
 * @property OrderConformation $orderConformation
 */
class OrderConfProducts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_conf_products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'order_conformation_id', 'quantity', 'rate', 'sgst', 'cgst', 'igst', 'gst', 'total_amount', 'total_gst'], 'required'],
            [['product_id', 'order_conformation_id', 'quantity'], 'integer'],
            [['rate', 'sgst', 'cgst', 'igst', 'gst', 'total_amount', 'total_gst'], 'number'],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductMaster::className(), 'targetAttribute' => ['product_id' => 'product_master_id']],
            [['order_conformation_id'], 'exist', 'skipOnError' => true, 'targetClass' => OrderConformation::className(), 'targetAttribute' => ['order_conformation_id' => 'order_conformation_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_conf_product_id' => 'Order Conf Product ID',
            'product_id' => 'Product ID',
            'order_conformation_id' => 'Order Conformation ID',
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
    public function getOrderConformation()
    {
        return $this->hasOne(OrderConformation::className(), ['order_conformation_id' => 'order_conformation_id']);
    }
}
