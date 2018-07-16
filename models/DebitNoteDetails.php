<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "debit_note_details".
 *
 * @property int $debit_note_detail_id
 * @property int $product_id
 * @property string $qty
 * @property string $uom
 * @property string $rate
 * @property string $amount
 * @property string $debit_note_id
 */
class DebitNoteDetails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'debit_note_details';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['qty', 'uom', 'rate', 'amount', 'debit_note_id','product_id'], 'required'],
            [['qty', 'uom', 'rate', 'amount', 'debit_note_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'debit_note_detail_id' => 'Debit Note Detail ID',
            'qty' => 'Qty',
            'uom' => 'Uom',
            'rate' => 'Rate',
            'amount' => 'Amount',
            'debit_note_id' => 'Debit Note ID',
            'product_id'=>'Product'
        ];
    }
    public function getProduct()
    {
        return $this->hasOne(ProductMaster::className(), ['product_master_id' => 'product_id']);
    }
}
