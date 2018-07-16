<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "instrument_master".
 *
 * @property int $instrument_master_id
 * @property string $name_of_instrument
 * @property string $instrument_identification_no
 * @property string $make_and_sr_no
 * @property string $capacity
 * @property string $least_count
 * @property string $acceptance_criteria
 * @property string $calibration_certi_no
 * @property string $date
 * @property string $next_due_on
 * @property string $sign_qc
 * @property int $is_deleted
 * @property string $created_at
 */
class InstrumentMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'instrument_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_of_instrument', 'instrument_identification_no', 'make_and_sr_no', 'capacity', 'least_count', 'acceptance_criteria', 'calibration_certi_no', 'date', 'next_due_on', 'sign_qc', 'is_deleted', 'created_at'], 'required'],
            [['date', 'next_due_on', 'created_at'], 'safe'],
            [['name_of_instrument', 'instrument_identification_no', 'make_and_sr_no', 'capacity', 'least_count', 'acceptance_criteria', 'calibration_certi_no', 'sign_qc'], 'string', 'max' => 255],
            [['is_deleted'], 'integer', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'instrument_master_id' => 'Instrument Master ID',
            'name_of_instrument' => 'Name Of Instrument',
            'instrument_identification_no' => 'Instrument Identification No',
            'make_and_sr_no' => 'Make And Sr No',
            'capacity' => 'Capacity',
            'least_count' => 'Least Count',
            'acceptance_criteria' => 'Acceptance Criteria',
            'calibration_certi_no' => 'Calibration Certi No',
            'date' => 'Date',
            'next_due_on' => 'Next Due On',
            'sign_qc' => 'Sign Qc',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
        ];
    }
}
