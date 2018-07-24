<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_inventory".
 *
 * @property int $product_inventory_id
 * @property int $product_id
 * @property int $initial_qty
 * @property int $current_qty
 * @property double $unit_price
 * @property string $note
 * @property int $min_qty
 * @property string $created_at
 */
class ProductInventory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_inventory';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'initial_qty', 'current_qty', 'unit_price', 'note', 'min_qty', 'created_at'], 'required'],
            [['product_id', 'initial_qty', 'current_qty', 'min_qty'], 'integer'],
            [['unit_price'], 'number'],
            [['note'], 'string'],
            [['created_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'product_inventory_id' => 'Product Inventory ID',
            'product_id' => 'Product ID',
            'initial_qty' => 'Initial Qty',
            'current_qty' => 'Current Qty',
            'unit_price' => 'Unit Price',
            'note' => 'Note',
            'min_qty' => 'Min Qty',
            'created_at' => 'Created At',
        ];
    }
}
