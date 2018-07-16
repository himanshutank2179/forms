<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "purchase_inventory".
 *
 * @property int $inventory_id
 * @property int $product_id
 * @property int $initial_qty
 * @property int $current_qty
 * @property double $unit_price
 * @property string $note
 * @property string $product_sku
 * @property string $created_at
 *
 * @property ProductMaster $product
 */
class PurchaseInventory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'purchase_inventory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'initial_qty', 'current_qty', 'unit_price'], 'required'],
            [['product_id', 'initial_qty', 'current_qty'], 'integer'],
            [['unit_price'], 'number'],
            [['note'], 'string'],
            [['created_at','product_sku'], 'safe'],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductMaster::className(), 'targetAttribute' => ['product_id' => 'product_master_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inventory_id' => 'Inventory ID',
            'product_id' => 'Product',
            'initial_qty' => 'Initial Quantity',
            'current_qty' => 'Current Quantity',
            'unit_price' => 'Unit Price',
            'product_sku' => 'Product SKU',
            'note' => 'Note',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(ProductMaster::className(), ['product_master_id' => 'product_id']);
    }
}
