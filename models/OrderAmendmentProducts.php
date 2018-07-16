<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_amendment_products".
 *
 * @property int $order_amendment_products_id
 * @property int $order_amendment_id
 * @property int $product_id
 * @property string $reviced_desc
 * @property string $quantity
 * @property string $rate_per_unit
 * @property string $total_amount
 */
class OrderAmendmentProducts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_amendment_products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_amendment_id', 'product_id', 'reviced_desc', 'quantity', 'rate_per_unit', 'total_amount'], 'required'],
            [['order_amendment_id', 'product_id'], 'integer'],
            [['reviced_desc'], 'string'],
            [['quantity', 'rate_per_unit', 'total_amount'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'order_amendment_products_id' => 'Order Amendment Products ID',
            'order_amendment_id' => 'Order Amendment ID',
            'product_id' => 'Product ID',
            'reviced_desc' => 'Reviced Desc',
            'quantity' => 'Quantity',
            'rate_per_unit' => 'Rate Per Unit',
            'total_amount' => 'Total Amount',
        ];
    }
    public function getProduct()
    {
        return $this->hasOne(ProductMaster::className(), ['product_master_id' => 'product_id']);
    }
}
