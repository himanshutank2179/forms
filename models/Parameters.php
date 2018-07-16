<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parameters".
 *
 * @property int $parameter_id
 * @property string $name
 * @property string $value
 * @property string $tolerance
 * @property int $unit
 * @property int $product_id
 * @property int $is_deleted
 */
class Parameters extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'parameters';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'value', 'tolerance', 'unit'], 'required'],
            [['unit','is_deleted'], 'integer'],
            [['product_id'], 'safe'],

            [['name', 'value', 'tolerance'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'parameter_id' => 'Parameter ID',
            'name' => 'Name',
            'value' => 'Value',
            'tolerance' => 'Tolerance',
            'unit' => 'Unit',
        ];
    }
    public function getUnitDetails()
    {
        return $this->hasOne(UnitsOfMeasures::className(), ['units_of_measures_id' => 'unit']);
    }
    public function getProduct()
    {
        return $this->hasOne(ProductMaster::className(), ['product_master_id' => 'product_id']);
    }
}
