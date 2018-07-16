<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bom_mfg_tracker".
 *
 * @property int $bom_mfg_tracker_id
 * @property int $product_id
 * @property int $raw_material_id
 * @property int $units
 * @property int $unit_of_measure_id
 * @property int $raw_material_units_used_till_now
 * @property int $available_raw_material
 * @property int $products_made
 * @property int $id_deleted
 * @property string $created_at
 *
 * @property UnitsOfMeasures $unitOfMeasure
 * @property ProductMaster $product
 * @property ProductMaster $rawMaterial
 */
class BomMfgTracker extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bom_mfg_tracker';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'raw_material_id', 'units', 'unit_of_measure_id', 'raw_material_units_used_till_now', 'available_raw_material', 'products_made', 'created_at'], 'required'],
            [['product_id', 'raw_material_id', 'units', 'unit_of_measure_id', 'raw_material_units_used_till_now', 'available_raw_material', 'products_made', 'id_deleted'], 'integer'],
            [['created_at'], 'safe'],
            [['unit_of_measure_id'], 'exist', 'skipOnError' => true, 'targetClass' => UnitsOfMeasures::className(), 'targetAttribute' => ['unit_of_measure_id' => 'units_of_measures_id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductMaster::className(), 'targetAttribute' => ['product_id' => 'product_master_id']],
            [['raw_material_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductMaster::className(), 'targetAttribute' => ['raw_material_id' => 'product_master_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_mfg_tracker_id' => 'Bom Mfg Tracker ID',
            'product_id' => 'Product',
            'raw_material_id' => 'Raw Material',
            'units' => 'Units',
            'unit_of_measure_id' => 'Unit Of Measure',
            'raw_material_units_used_till_now' => 'Raw Material Units Used Till Now',
            'available_raw_material' => 'Available Raw Material',
            'products_made' => 'Products Made',
            'id_deleted' => 'Id Deleted',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnitOfMeasure()
    {
        return $this->hasOne(UnitsOfMeasures::className(), ['units_of_measures_id' => 'unit_of_measure_id']);
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
    public function getRawMaterial()
    {
        return $this->hasOne(ProductMaster::className(), ['product_master_id' => 'raw_material_id']);
    }
}
