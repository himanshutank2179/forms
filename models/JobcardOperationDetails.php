<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jobcard_operation_details".
 *
 * @property int $jobcard_operation_detail_id
 * @property int $jobcard_id
 * @property int $operation_id
 * @property string $start_from
 * @property string $end_to
 * @property string $m_ch_ve
 * @property string $parameter
 * @property int $ok
 * @property int $rejected
 * @property int $total
 * @property string $in_process_qc_no
 * @property string $final_qc_no
 * @property string $pressure_test_report_no
 * @property string $operator
 * @property string $remark


 * @property string $product_id
 * @property string $qty
 * @property string $incomming_qc_no


 *
 * @property OperationMaster $operation
 * @property Jobcard $jobcard
 */
class JobcardOperationDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jobcard_operation_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jobcard_id', 'operation_id', 'start_from', 'end_to', 'm_ch_ve', 'parameter', 'ok', 'rejected', 'total', 'in_process_qc_no', 'final_qc_no', 'pressure_test_report_no', 'operator', 'remark'], 'safe'],
            [['jobcard_id', 'operation_id', 'ok', 'rejected', 'total'], 'integer'],
            [['start_from', 'end_to','product_id','qty','incomming_qc_no'], 'safe'],
            [['remark'], 'string'],
            [['m_ch_ve', 'parameter', 'in_process_qc_no', 'final_qc_no', 'pressure_test_report_no', 'operator'], 'string', 'max' => 255],
            [['operation_id'], 'exist', 'skipOnError' => true, 'targetClass' => OperationMaster::className(), 'targetAttribute' => ['operation_id' => 'operation_master_id']],
            [['jobcard_id'], 'exist', 'skipOnError' => true, 'targetClass' => Jobcard::className(), 'targetAttribute' => ['jobcard_id' => 'jobcard_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jobcard_operation_detail_id' => 'Jobcard Operation Detail ID',
            'jobcard_id' => 'Jobcard ID',
            'operation_id' => 'Operation ID',
            'start_from' => 'Start From',
            'end_to' => 'End To',
            'm_ch_ve' => 'M Ch Ve',
            'parameter' => 'Parameter',
            'ok' => 'Ok',
            'rejected' => 'Rejected',
            'total' => 'Total',
            'in_process_qc_no' => 'In Process Qc No',
            'final_qc_no' => 'Final Qc No',
            'pressure_test_report_no' => 'Pressure Test Report No',
            'operator' => 'Operator',
            'remark' => 'Remark',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOperation()
    {
        return $this->hasOne(OperationMaster::className(), ['operation_master_id' => 'operation_id']);
    }
    public function getProduct()
    {
        return $this->hasOne(ProductMaster::className(), ['product_master_id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobcard()
    {
        return $this->hasOne(Jobcard::className(), ['jobcard_id' => 'jobcard_id']);
    }
}
