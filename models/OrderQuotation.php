<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_quotation".
 *
 * @property int $order_quotation_id
 * @property string $inquiry_date
 * @property string $delivery_period
 * @property string $our_quote_ref_num
 * @property string $mod_of_dispatch
 * @property string $payment_terms
 * @property string $inasurance
 * @property int $inspection_by
 * @property int $approved_by
 * @property int $state_id
 * @property int $city_id
 * @property int $client_id
 * @property int $is_deleted
 * @property string $created_at
 *
 * @property Users $inspectionBy
 * @property Users $approvedBy
 * @property QuotationProducts[] $quotationProducts
 */
class OrderQuotation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_quotation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inquiry_date', 'delivery_period', 'our_quote_ref_num', 'mod_of_dispatch', 'payment_terms', 'inspection_by', 'approved_by', 'created_at','state_id','city_id'], 'required'],
            [['inquiry_date', 'created_at','client_id'], 'safe'],
            [['inspection_by', 'approved_by', 'is_deleted'], 'integer'],
            [['delivery_period', 'our_quote_ref_num', 'mod_of_dispatch', 'payment_terms', 'inasurance'], 'string', 'max' => 255],
            [['inspection_by'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['inspection_by' => 'user_id']],
            [['approved_by'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['approved_by' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_quotation_id' => 'Order Quotation ID',
            'inquiry_date' => 'Inquiry Date',
            'delivery_period' => 'Delivery Period',
            'our_quote_ref_num' => 'Our Quote Ref Num',
            'mod_of_dispatch' => 'Mod Of Dispatch',
            'payment_terms' => 'Payment Terms',
            'inasurance' => 'Inasurance',
            'inspection_by' => 'Inspection By',
            'approved_by' => 'Approved By',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
            'state_id' => 'State',
            'city_id' => 'City',
            'client_id' => 'Client',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInspectionBy()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'inspection_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApprovedBy()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'approved_by']);
    }

    public function getClient()
    {
        return $this->hasOne(Clients::className(), ['client_id' => 'client_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuotationProducts()
    {
        return $this->hasMany(QuotationProducts::className(), ['order_quotation_id' => 'order_quotation_id']);
    }
}
