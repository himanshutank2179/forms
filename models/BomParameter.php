<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bom_parameter".
 *
 * @property int $bom_parameter_id
 * @property int $bill_of_material_id
 * @property int $parameter_id
 */
class BomParameter extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bom_parameter';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bill_of_material_id', 'parameter_id'], 'required'],
            [['bill_of_material_id', 'parameter_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_parameter_id' => 'Bom Parameter ID',
            'bill_of_material_id' => 'Bill Of Material ID',
            'parameter_id' => 'Parameter ID',
        ];
    }
}
