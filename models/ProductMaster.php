<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_master".
 *
 * @property int $product_master_id
 * @property string $product_name
 * @property string $product_code
 * @property string $generic_name
 * @property string $model
 * @property string $technical_spacifications
 * @property string $bill_of_material
 * @property string $sku
 * @property int $is_purchase
 * @property int $is_deleted
 * @property string $created_at
 */
class ProductMaster extends \yii\db\ActiveRecord
{
    public $initialQty,$technical_spacifications;
    public $unitPrice;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_name'], 'required'],
            [['product_name', 'generic_name', 'model', 'created_at', 'initialQty', 'unitPrice'], 'safe'],
            [['product_code'], 'string'],
            [['product_code'], 'unique'],
            [['created_at', 'is_purchase', 'bill_of_material', 'sku', 'initialQty'], 'safe'],
            [['product_name', 'generic_name', 'model', 'bill_of_material'], 'string', 'max' => 255],
            [['is_deleted'], 'integer', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_master_id' => 'Product Master ID',
            'product_name' => 'Product Name',
            'generic_name' => 'Generic Name',
            'model' => 'Model',
            'technical_spacifications' => 'Technical Spacifications',
            'bill_of_material' => 'Bill Of Material',
            'is_purchase' => 'Is Purchase',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
            'initialQty' => 'Quantity',
            'unitPrice' => 'Unit Price',
        ];
    }
    public function getProductParameters()
    {
        return $this->hasMany(ProductParameters::className(), ['product_id' => 'product_master_id']);
    }

}
