<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bill_of_material".
 *
 * @property int $bill_of_material_id
 * @property int $raw_materia_id
 * @property string $qty
 * @property int $unit_id
 * @property string $product_code
 * @property int $document_id
 * @property string $procuring_by
 * @property int $is_deleted
 * @property string $created_at
 */
class BillOfMaterial extends \yii\db\ActiveRecord
{
    public $perameters;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bill_of_material';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['raw_materia_id', 'qty', 'unit_id', 'product_code', 'document_id', 'procuring_by', 'created_at'], 'required'],
            [['raw_materia_id', 'unit_id', 'document_id', 'is_deleted'], 'integer'],
            [['created_at','perameters'], 'safe'],
            [['qty', 'product_code', 'procuring_by'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bill_of_material_id' => 'Bill Of Material ID',
            'raw_materia_id' => 'Raw Materia',
            'qty' => 'Quantity',
            'unit_id' => 'Unit',
            'product_code' => 'Product Code',
            'document_id' => 'Document',
            'procuring_by' => 'Procuring By',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
        ];
    }
    public function getRawMaterial()
    {
        return $this->hasOne(ProductMaster::className(), ['product_master_id' => 'raw_materia_id']);
    }
    public function getDocument()
    {
        return $this->hasOne(DocumentsAndDistributionMaster::className(), ['documents_and_distribution_master_id' => 'document_id']);
    }
    public function getUnit()
    {
        return $this->hasOne(UnitsOfMeasures::className(), ['units_of_measures_id' => 'unit_id']);
    }
}
