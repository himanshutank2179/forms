<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "units_of_measures".
 *
 * @property int $units_of_measures_id
 * @property string $name
 */
class UnitsOfMeasures extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'units_of_measures';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'units_of_measures_id' => 'Units Of Measures ID',
            'name' => 'Name',
        ];
    }
}
