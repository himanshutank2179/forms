<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "incomming_qc".
 *
 * @property int $incomming_qc_id
 * @property string $GRN_NO
 * @property string $manufacturer
 * @property string $label_particulars
 * @property string $mfg_date
 * @property string $heat
 * @property string $lot
 * @property string $batch_no
 * @property string $v_test_no
 * @property string $date
 * @property string $accepted_qty
 * @property string $rejected_qty

 * @property int $product_id
 * @property int $qty
 * @property string $remark
 * @property int $inspected_by
 * @property int $approved_by
 * @property int $is_deleted
 * @property int $is_approved
 * @property string $created_at
 *
 * @property ProductMaster $product
 */
class IncommingQc extends \yii\db\ActiveRecord
{
    public $weight_unit;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'incomming_qc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['manufacturer', 'label_particulars', 'mfg_date', 'heat', 'lot', 'batch_no', 'v_test_no', 'date', 'product_id', 'qty',  'inspected_by', 'approved_by', 'created_at'], 'required'],
            [['mfg_date', 'date', 'created_at','is_approved','weight','weight_unit','remark','accepted_qty','rejected_qty'], 'safe'],
            [['product_id', 'qty', 'inspected_by', 'approved_by', 'is_deleted'], 'integer'],
            [['remark'], 'string'],
            [['sr_no', 'manufacturer', 'label_particulars', 'heat', 'lot', 'batch_no', 'v_test_no'], 'string', 'max' => 255],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductMaster::className(), 'targetAttribute' => ['product_id' => 'product_master_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'incomming_qc_id' => 'Incomming Qc ID',
            'sr_no' => 'Sr No',
            'GRN_NO' => 'GRN NO',
            'manufacturer' => 'Manufacturer',
            'label_particulars' => 'Label Particulars',
            'mfg_date' => 'Manufacturing Date',
            'heat' => 'Heat',
            'lot' => 'Lot',
            'batch_no' => 'Batch No',
            'v_test_no' => 'Vendor Test No',
            'date' => 'Date',
            'product_id' => 'Product',
            'qty' => 'Quantity',
            'remark' => 'Remark',
            'inspected_by' => 'Inspected By',
            'approved_by' => 'Approved By',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
            'is_approved' => 'Is Approved?',
            'weight' => 'Weight',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(ProductMaster::className(), ['product_master_id' => 'product_id']);
    }

   /* public function getInspectedBy()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'inspected_by']);
    }*/

    public function getApprovedBy()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'approved_by']);
    }
}
