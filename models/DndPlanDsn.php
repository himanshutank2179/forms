<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dnd_plan_dsn".
 *
 * @property int $dnd_plan_dsn_id
 * @property int $sr_no
 * @property string $activities_to_perform
 * @property string $responsibility
 * @property string $resources_required
 * @property string $person_consulted
 * @property string $record
 * @property string $activity_to_be_reviewed_on
 * @property string $actual_dt_of_completion
 * @property string $remarks
 */
class DndPlanDsn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dnd_plan_dsn';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sr_no', 'activities_to_perform', 'responsibility', 'resources_required', 'person_consulted', 'record', 'activity_to_be_reviewed_on', 'actual_dt_of_completion', 'remarks'], 'required'],
            [['sr_no'], 'integer'],
            [['remarks'], 'string'],
            [['activities_to_perform', 'responsibility', 'resources_required', 'person_consulted', 'record', 'activity_to_be_reviewed_on', 'actual_dt_of_completion'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dnd_plan_dsn_id' => 'Dnd Plan Dsn ID',
            'sr_no' => 'Sr No',
            'activities_to_perform' => 'Activities To Perform',
            'responsibility' => 'Responsibility',
            'resources_required' => 'Resources Required',
            'person_consulted' => 'Person Consulted',
            'record' => 'Record',
            'activity_to_be_reviewed_on' => 'Activity To Be Reviewed On',
            'actual_dt_of_completion' => 'Actual Dt Of Completion',
            'remarks' => 'Remarks',
        ];
    }
}
