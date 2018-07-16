<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "incomming_qc_parameters".
 *
 * @property int $incomming_qc_parameter_id
 * @property int $incomming_qc_id
 * @property int $parameter_id
 * @property int $unit
 * @property string $actual
 * @property string $observation
 *
 * @property IncommingQc $incommingQc
 * @property Parameters $parameter
 */
class IncommingQcParameters extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'incomming_qc_parameters';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['incomming_qc_id', 'parameter_id', 'observation'], 'required'],
            [['incomming_qc_id', 'parameter_id', 'unit'], 'integer'],
            [['observation'], 'string'],
            [['actual'], 'string', 'max' => 255],
            [['incomming_qc_id'], 'exist', 'skipOnError' => true, 'targetClass' => IncommingQc::className(), 'targetAttribute' => ['incomming_qc_id' => 'incomming_qc_id']],
            [['parameter_id'], 'exist', 'skipOnError' => true, 'targetClass' => Parameters::className(), 'targetAttribute' => ['parameter_id' => 'parameter_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'incomming_qc_parameter_id' => 'Incomming Qc Parameter ID',
            'incomming_qc_id' => 'Incomming Qc ID',
            'parameter_id' => 'Parameter ID',
            'unit' => 'Unit',
            'actual' => 'Actual',
            'observation' => 'Observation',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIncommingQc()
    {
        return $this->hasOne(IncommingQc::className(), ['incomming_qc_id' => 'incomming_qc_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParameter()
    {
        return $this->hasOne(Parameters::className(), ['parameter_id' => 'parameter_id']);
    }
}
