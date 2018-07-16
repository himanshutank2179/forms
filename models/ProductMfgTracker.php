<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_mfg_tracker".
 *
 * @property int $product_mfg_tracker_id
 * @property int $product_id
 * @property int $qty
 *
 * @property ProductMaster $product
 */
class ProductMfgTracker extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_mfg_tracker';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'qty'], 'required'],
            [['product_id', 'qty'], 'integer'],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductMaster::className(), 'targetAttribute' => ['product_id' => 'product_master_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_mfg_tracker_id' => 'Product Mfg Tracker ID',
            'product_id' => 'Product',
            'qty' => 'Qty',
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
