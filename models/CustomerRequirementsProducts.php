<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer_requirements_products".
 *
 * @property int $customer_requirements_products_id
 * @property int $product_id
 * @property int $customer_requirement_id
 *
 * @property ProcessMaster $product
 * @property CustomerRequirements $customerRequirement
 */
class CustomerRequirementsProducts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer_requirements_products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'customer_requirement_id'], 'required'],
            [['product_id', 'customer_requirement_id'], 'integer'],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProcessMaster::className(), 'targetAttribute' => ['product_id' => 'process_master_id']],
            [['customer_requirement_id'], 'exist', 'skipOnError' => true, 'targetClass' => CustomerRequirements::className(), 'targetAttribute' => ['customer_requirement_id' => 'customer_requirement_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'customer_requirements_products_id' => 'Customer Requirements Products ID',
            'product_id' => 'Product ID',
            'customer_requirement_id' => 'Customer Requirement ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(ProcessMaster::className(), ['process_master_id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerRequirement()
    {
        return $this->hasOne(CustomerRequirements::className(), ['customer_requirement_id' => 'customer_requirement_id']);
    }
}
