<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vendor_mobile".
 *
 * @property int $vendor_mobile_id
 * @property int $vendor_id
 * @property string $vendor_mobile
 *
 * @property Vendors $vendor
 */
class VendorMobile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vendor_mobile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vendor_id', 'vendor_mobile'], 'required'],
            [['vendor_id'], 'integer'],
            [['vendor_mobile'], 'string', 'max' => 255],
            [['vendor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vendors::className(), 'targetAttribute' => ['vendor_id' => 'vendor_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'vendor_mobile_id' => 'Vendor Mobile ID',
            'vendor_id' => 'Vendor ID',
            'vendor_mobile' => 'Vendor Mobile',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendor()
    {
        return $this->hasOne(Vendors::className(), ['vendor_id' => 'vendor_id']);
    }
}
