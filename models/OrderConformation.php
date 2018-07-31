<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_conformation".
 *
 * @property int $order_conformation_id
 * @property string $order_number
 * @property string $inquiry_date
 * @property string $delivery_period
 * @property string $our_quote_ref_num
 * @property string $mod_of_dispatch
 * @property string $payment_terms
 * @property string $inasurance
 * @property int $inspection_by
 * @property int $approved_by
 * @property int $is_deleted
 * @property int $client_id
 * @property string $created_at
 *
 * @property Users $inspectionBy
 * @property Users $approvedBy
 */
class OrderConformation extends \yii\db\ActiveRecord
{
    public $is_ready_to_sale;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_conformation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_number', 'inquiry_date', 'delivery_period', 'our_quote_ref_num', 'mod_of_dispatch', 'payment_terms', 'inspection_by', 'approved_by', 'created_at'], 'required'],
            [['inspection_by', 'inquiry_date', 'created_at','state_id','city_id','client_id','is_ready_to_sale'], 'safe'],
            [['state_id', 'city_id', 'approved_by', 'is_deleted'], 'integer'],
            [['order_number', 'delivery_period', 'our_quote_ref_num', 'mod_of_dispatch', 'payment_terms', 'inasurance'], 'string', 'max' => 255],
            [['approved_by'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['approved_by' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_conformation_id' => 'Order Conformation ID',
            'order_number' => 'Order Number',
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
            'client_id' => 'Customer',
        ];
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
}
