<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "itqt_two_planner".
 *
 * @property int $itqt_two_planner_id
 * @property string $process
 * @property string $parameter
 * @property string $width
 * @property string $height
 * @property string $size
 * @property string $weight
 * @property string $color
 * @property string $length
 * @property string $thickness
 * @property string $straightness
 * @property string $ovality
 * @property string $tolerance
 * @property string $process_standard_parameter
 * @property string $sampling_plan
 * @property string $record
 * @property string $resposi_ability
 * @property string $created_at
 */
class ItqtTwoPlanner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'itqt_two_planner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['process', 'parameter', 'width', 'height', 'size', 'weight', 'color', 'length', 'thickness', 'straightness', 'ovality', 'tolerance', 'process_standard_parameter', 'sampling_plan', 'record', 'resposi_ability', 'created_at'], 'required'],
            [['created_at'], 'safe'],
            [['process', 'parameter', 'width', 'height', 'size', 'weight', 'color', 'length', 'thickness', 'straightness', 'ovality', 'tolerance', 'process_standard_parameter', 'sampling_plan', 'record', 'resposi_ability'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'itqt_two_planner_id' => 'Itqt Two Planner ID',
            'process' => 'Process',
            'parameter' => 'Parameter',
            'width' => 'Width',
            'height' => 'Height',
            'size' => 'Size',
            'weight' => 'Weight',
            'color' => 'Color',
            'length' => 'Length',
            'thickness' => 'Thickness',
            'straightness' => 'Straightness',
            'ovality' => 'Ovality',
            'tolerance' => 'Tolerance',
            'process_standard_parameter' => 'Process Standard Parameter',
            'sampling_plan' => 'Sampling Plan',
            'record' => 'Record',
            'resposi_ability' => 'Resposi Ability',
            'created_at' => 'Created At',
        ];
    }
}
