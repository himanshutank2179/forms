<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supplier_master".
 *
 * @property int $supplier_master_id
 * @property string $name
 * @property string $address
 * @property string $approved_for_product
 * @property string $rating_performance
 * @property string $grade
 * @property string $evaluated_by
 * @property string $approved_by
 */
class SupplierMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supplier_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address', 'approved_for_product', 'rating_performance', 'grade', 'evaluated_by', 'approved_by'], 'required'],
            [['address'], 'string'],
            [['name', 'approved_for_product', 'rating_performance', 'grade', 'evaluated_by', 'approved_by'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'supplier_master_id' => 'Supplier Master ID',
            'name' => 'Name',
            'address' => 'Address',
            'approved_for_product' => 'Approved For Product',
            'rating_performance' => 'Rating Performance',
            'grade' => 'Grade',
            'evaluated_by' => 'Evaluated By',
            'approved_by' => 'Approved By',
        ];
    }
}
