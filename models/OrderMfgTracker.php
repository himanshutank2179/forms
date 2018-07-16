<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_mfg_tracker".
 *
 * @property int $order_mfg_tracker_id
 * @property string $order_number
 * @property string $order_type
 * @property string $order_date
 * @property string $expected_date
 * @property int $product_id
 * @property int $qty
 * @property string $notes
 * @property int $is_deleted
 * @property string $created_at
 *
 * @property ProductMaster $product
 */
class OrderMfgTracker extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_mfg_tracker';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_number', 'order_type', 'order_date', 'expected_date', 'product_id', 'qty', 'notes', 'created_at'], 'required'],
            [['order_date', 'expected_date', 'created_at'], 'safe'],
            [['product_id', 'qty', 'is_deleted'], 'integer'],
            [['notes'], 'string'],
            [['order_number', 'order_type'], 'string', 'max' => 255],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductMaster::className(), 'targetAttribute' => ['product_id' => 'product_master_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_mfg_tracker_id' => 'Order Mfg Tracker ID',
            'order_number' => 'Order Number',
            'order_type' => 'Order Type',
            'order_date' => 'Order Date',
            'expected_date' => 'Expected Date',
            'product_id' => 'Product ID',
            'qty' => 'Qty',
            'notes' => 'Notes',
            'is_deleted' => 'Is Deleted',
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
