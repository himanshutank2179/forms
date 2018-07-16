<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer_requirements".
 *
 * @property int $customer_requirement_id
 * @property string $date
 * @property int $client_id
 * @property string $address
 * @property string $product_info
 * @property string $quatation
 * @property string $quatation_ref
 * @property string $customer_po_number
 * @property int $order_review_by
 * @property string $date_of_dispatch
 * @property string $item
 * @property string $invoice_number
 * @property string $created_at
 * @property int $is_deleted
 *
 * @property Clients $client
 * @property Users $orderReviewBy
 */
class CustomerRequirements extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer_requirements';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'client_id', 'address', 'product_info', 'quatation', 'quatation_ref', 'customer_po_number', 'order_review_by', 'date_of_dispatch', 'item', 'created_at'], 'required'],
            [['date', 'created_at'], 'safe'],
            [['client_id', 'order_review_by', 'is_deleted'], 'integer'],
            [['address', 'product_info'], 'string'],
            [['quatation', 'quatation_ref', 'customer_po_number', 'date_of_dispatch', 'item', 'invoice_number'], 'string', 'max' => 255],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clients::className(), 'targetAttribute' => ['client_id' => 'client_id']],
            [['order_review_by'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['order_review_by' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'customer_requirement_id' => 'Customer Requirement ID',
            'date' => 'Date',
            'client_id' => 'Client',
            'address' => 'Address',
            'product_info' => 'Product Info',
            'quatation' => 'Quatation',
            'quatation_ref' => 'Quatation Ref',
            'customer_po_number' => 'Customer Po Number',
            'order_review_by' => 'Order Review By',
            'date_of_dispatch' => 'Date Of Dispatch',
            'item' => 'Item',
            'invoice_number' => 'Invoice Number',
            'created_at' => 'Created At',
            'is_deleted' => 'Is Deleted',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Clients::className(), ['client_id' => 'client_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderReviewBy()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'order_review_by']);
    }
}
