<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inspection_planer".
 *
 * @property int $inspection_planer_id
 * @property int $product_id
 * @property int $process_id
 * @property int $parameter_id
 * @property string $tolerance
 * @property string $acceptance_criteria
 * @property string $inspection_stage
 * @property string $sampling_plan
 * @property string $test_method
 * @property int $inspected_by
 * @property int $approved_by
 * @property string $record
 * @property string $created_at
 *
 * @property ProcessMaster $product
 * @property ProcessMaster $process
 * @property Parameters $parameter
 * @property Users $inspectedBy
 * @property Users $approvedBy
 */
class InspectionPlaner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inspection_planer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'process_id', 'parameter_id', 'tolerance', 'inspection_stage', 'sampling_plan', 'test_method', 'inspected_by', 'approved_by', 'record', 'created_at','acceptance_criteria'], 'required'],
            [['product_id', 'process_id', 'parameter_id', 'inspected_by', 'approved_by'], 'integer'],
            [['created_at'], 'safe'],
            [['tolerance', 'inspection_stage', 'sampling_plan', 'test_method', 'record'], 'string', 'max' => 255],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProcessMaster::className(), 'targetAttribute' => ['product_id' => 'process_master_id']],
            [['process_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProcessMaster::className(), 'targetAttribute' => ['process_id' => 'process_master_id']],
            [['parameter_id'], 'exist', 'skipOnError' => true, 'targetClass' => Parameters::className(), 'targetAttribute' => ['parameter_id' => 'parameter_id']],
            [['inspected_by'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['inspected_by' => 'user_id']],
            [['approved_by'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['approved_by' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inspection_planer_id' => 'Inspection Planer ID',
            'product_id' => 'Product / Raw Material',
            'process_id' => 'Process',
            'parameter_id' => 'Parameter',
            'tolerance' => 'Tolerance',
            'inspection_stage' => 'Inspection Stage',
            'sampling_plan' => 'Sampling Plan',
            'test_method' => 'Test Method',
            'inspected_by' => 'Inspected By',
            'approved_by' => 'Approved By',
            'record' => 'Record',
            'created_at' => 'Created At',
            'acceptance_criteria' => 'Acceptance Criteria',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(ProcessMaster::className(), ['process_master_id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProcess()
    {
        return $this->hasOne(ProcessMaster::className(), ['process_master_id' => 'process_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParameter()
    {
        return $this->hasOne(Parameters::className(), ['parameter_id' => 'parameter_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInspectedBy()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'inspected_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApprovedBy()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'approved_by']);
    }
}
