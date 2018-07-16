<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jobcard_operation_parameter".
 *
 * @property int $jobcard_operation_parameter_id
 * @property int $jobcard_operation_detail_id
 * @property int $parameter_id
 * @property int $product_id
 * @property string $unit
 * @property int $instrument_id
 * @property string $first_qc_result
 * @property string $second_qc_result
 * @property string $third_qc_result
 * @property string $averages
 */
class JobcardOperationParameter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jobcard_operation_parameter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jobcard_operation_detail_id', 'parameter_id', 'unit', 'instrument_id', 'first_qc_result', 'second_qc_result', 'third_qc_result', 'averages'], 'required'],
            [['jobcard_operation_detail_id', 'parameter_id', 'product_id', 'instrument_id'], 'integer'],
            // [['inprocess_qc_paramter'], 'safe'],
            [['unit', 'first_qc_result', 'second_qc_result', 'third_qc_result', 'averages','inprocess_qc_paramter'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'jobcard_operation_parameter_id' => 'Jobcard Operation Parameter ID',
            'jobcard_operation_detail_id' => 'Jobcard Operation Detail ID',
            'parameter_id' => 'Parameter ID',
            'product_id' => 'Product ID',
            'unit' => 'Unit',
            'instrument_id' => 'Instrument ID',
            'first_qc_result' => 'First Qc Result',
            'second_qc_result' => 'Second Qc Result',
            'third_qc_result' => 'Third Qc Result',
            'averages' => 'Averages',
            'in_process_qc_paramter' => 'In-process QC Paramter'
        ];
    }
}
