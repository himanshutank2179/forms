<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "debit_note".
 *
 * @property int $debit_note_id
 * @property string $party_name
 * @property string $address1
 * @property string $address2
 * @property string $address3
 * @property string $debit_note_no
 * @property string $date
 * @property string $bill_no
 * @property string $bill_date
 * @property string $delivery_charges
 * @property string $party_gst_no
 * @property string $company_gst_no
 * @property string $party_gst
 * @property string $company_gst
 * @property string $total
 * @property string $remark
 * @property int $is_deleted
 * @property string $created_at
 */
class DebitNote extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'debit_note';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['party_name', 'address1','debit_note_no', 'date', 'bill_no', 'bill_date', 'delivery_charges', 'party_gst_no', 'company_gst_no', 'party_gst', 'company_gst', 'total', 'remark', 'created_at'], 'required'],
            [['address1', 'address2', 'address3', 'remark'], 'string'],
            [['date', 'bill_date', 'created_at'], 'safe'],
            [['is_deleted'], 'integer'],
            [['party_name', 'debit_note_no', 'bill_no', 'delivery_charges', 'party_gst_no', 'company_gst_no', 'party_gst', 'company_gst', 'total'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'debit_note_id' => 'Debit Note ID',
            'party_name' => 'Party Name',
            'address1' => 'Address1',
            'address2' => 'Address2',
            'address3' => 'Address3',
            'debit_note_no' => 'Debit Note No',
            'date' => 'Date',
            'bill_no' => 'Bill No',
            'bill_date' => 'Bill Date',
            'delivery_charges' => 'Delivery Charges',
            'party_gst_no' => 'Party Gst No',
            'company_gst_no' => 'Company Gst No',
            'party_gst' => 'Party Gst',
            'company_gst' => 'Company Gst',
            'total' => 'Total',
            'remark' => 'Remark',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
        ];
    }

    public function getDebitNoteDetails()
    {
        return $this->hasMany(DebitNoteDetails::className(), ['debit_note_id' => 'debit_note_id']);
    }
}


