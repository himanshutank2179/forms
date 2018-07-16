<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "raw_materials_mfg_tracker".
 *
 * @property int $raw_materials_mfg_tracker_id
 * @property int $product_id
 * @property int $starting_inventory
 * @property int $re_order_point
 * @property int $purchases
 * @property int $available_now
 * @property string $to_order
 *
 * @property ProductMaster $product
 */
class RawMaterialsMfgTracker extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'raw_materials_mfg_tracker';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'starting_inventory', 're_order_point', 'purchases', 'available_now', 'to_order'], 'required'],
            [['product_id', 'starting_inventory', 're_order_point', 'purchases', 'available_now'], 'integer'],
            [['to_order'], 'string', 'max' => 255],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductMaster::className(), 'targetAttribute' => ['product_id' => 'product_master_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'raw_materials_mfg_tracker_id' => 'Raw Materials Mfg Tracker ID',
            'product_id' => 'Product',
            'starting_inventory' => 'Starting Inventory',
            're_order_point' => 'Re Order Point',
            'purchases' => 'Purchases',
            'available_now' => 'Available Now',
            'to_order' => 'To Order',
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
