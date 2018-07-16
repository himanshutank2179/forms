<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer_compaint_report".
 *
 * @property int $customer_compaint_report_id
 * @property int $customer_compaint_id
 * @property string $date
 * @property string $date_of_receipt_of_compliant
 * @property string $received_by
 * @property string $made_of_receipt
 * @property int $customer_id
 * @property int $product_id
 * @property int $incomming_qc_no  REMOVED
 * @property string $date_of_dispatch
 * @property string $invoice_no
 * @property string $compaint_desc
 * @property string $compaint_nature
 * @property string $report_of_work
 * @property string $corrective_action
 * @property string $taken_action_result
 * @property string $proposed_action
 * @property string $analysed_by
 * @property string $closed_by
 * @property string $created_at
 */
class CustomerCompaintReport extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer_compaint_report';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_compaint_id', 'date', 'date_of_receipt_of_compliant', 'received_by', 'made_of_receipt', 'customer_id', 'product_id', 'date_of_dispatch', 'invoice_no', 'compaint_desc', 'compaint_nature', 'report_of_work', 'corrective_action', 'taken_action_result', 'proposed_action', 'analysed_by', 'closed_by', 'created_at'], 'required'],
            [['customer_compaint_id', 'customer_id', 'product_id', 'incomming_qc_no'], 'integer'],
            [['date', 'date_of_receipt_of_compliant', 'date_of_dispatch', 'created_at'], 'safe'],
            [['compaint_desc', 'report_of_work', 'corrective_action', 'taken_action_result', 'proposed_action'], 'string'],
            [['received_by', 'made_of_receipt', 'invoice_no', 'compaint_nature', 'analysed_by', 'closed_by'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'customer_compaint_report_id' => 'Customer Compaint Report ID',
            'customer_compaint_id' => 'Customer Complaint',
            'date' => 'Date',
            'date_of_receipt_of_compliant' => 'Date of Receipt of Compliant',
            'received_by' => 'Received By',
            'made_of_receipt' => 'Mode of Receipt',
            'customer_id' => 'Customer Name',
            'product_id' => 'Product',
            'incomming_qc_no' => 'Incomming Qc No',
            'date_of_dispatch' => 'Date of Dispatch',
            'invoice_no' => 'Invoice No',
            'compaint_desc' => 'Description Of Complaints',
            'compaint_nature' => 'Nature Of complaint',
            'report_of_work' => 'Report Of Works Head / QC Incharge On Complaint',
            'corrective_action' => 'Corrective Action Taken',
            'taken_action_result' => 'Result Of Action Taken',
            'proposed_action' => 'Actions Proposed For Future',
            'analysed_by' => 'Analysed By',
            'closed_by' => 'Closed By',
            'created_at' => 'Created At',
        ];
    }
    public function getProduct()
    {
        return $this->hasOne(ProductMaster::className(), ['product_master_id' => 'product_id']);
    }

    public function getClient()
    {
        return $this->hasOne(Clients::className(), ['client_id' => 'customer_id']);
    }

    public function getIncommingqc()
    {
        return $this->hasOne(IncommingQc::className(), ['incomming_qc_id' => 'incomming_qc_no']);
    }
}
