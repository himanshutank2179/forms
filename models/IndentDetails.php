<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "indent_details".
 *
 * @property int $indent_detail_id
 * @property int $product_id
 * @property int $qty
 * @property string $name_of_work
 * @property string $material_required_on
 * @property string $po_no_date
 * @property string $item_receipt_perticulars
 * @property int $indent_id
 */
class IndentDetails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'indent_details';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'qty', 'name_of_work', 'material_required_on', 'po_no_date', 'item_receipt_perticulars', 'indent_id'], 'required'],
            [['product_id', 'qty', 'indent_id'], 'integer'],
            [['po_no_date'], 'safe'],
            [['name_of_work', 'material_required_on', 'item_receipt_perticulars'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'indent_detail_id' => 'Indent Detail ID',
            'product_id' => 'Product ID',
            'qty' => 'Qty',
            'name_of_work' => 'Name Of Work',
            'material_required_on' => 'Material Required On',
            'po_no_date' => 'Po No Date',
            'item_receipt_perticulars' => 'Item Receipt Perticulars',
            'indent_id' => 'Indent ID',
        ];
    }
}
