<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "non_confirming_product".
 *
 * @property int $non_confirming_product_id
 * @property string $date
 * @property string $GRN_NO Voucher No. (GRN, Job card Issue Note, Debate Note
 * @property int $product_id
 * @property string $resion
 * @property double $qty
 * @property string $balance
 * @property int $return_to_vendor_qty
 * @property int $rework_qty
 * @property int $scrap_qty
 * @property int $sales_on_discount_qty
 * @property string $sign_of_prod
 * @property int $is_deleted
 * @property string $created_at
 */
class NonConfirmingProduct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'non_confirming_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'created_at'], 'safe'],
            [['product_id', 'return_to_vendor_qty', 'rework_qty', 'scrap_qty', 'sales_on_discount_qty', 'is_deleted'], 'integer'],
            [['resion'], 'string'],
            [['qty'], 'number'],
            [['created_at'], 'required'],
            [['GRN_NO', 'balance', 'sign_of_prod'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'non_confirming_product_id' => 'Non Confirming Product ID',
            'date' => 'Date',
            'GRN_NO' => 'Voucher No. (GRN, Job card Issue Note, Debate Note',
            'product_id' => 'Product ID',
            'resion' => 'Resion',
            'qty' => 'Qty',
            'balance' => 'Balance',
            'return_to_vendor_qty' => 'Return To Vendor Qty',
            'rework_qty' => 'Rework Qty',
            'scrap_qty' => 'Scrap Qty',
            'sales_on_discount_qty' => 'Sales On Discount Qty',
            'sign_of_prod' => 'Sign Of Prod',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
        ];
    }
}
