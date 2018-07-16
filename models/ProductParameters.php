<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_parameters".
 *
 * @property int $product_parameter_id
 * @property int $product_id
 * @property int $parameter_id
 *
 * @property ProductMaster $product
 * @property Parameters $parameter
 */
class ProductParameters extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_parameters';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'parameter_id'], 'required'],
            [['product_id', 'parameter_id'], 'integer'],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductMaster::className(), 'targetAttribute' => ['product_id' => 'product_master_id']],
            [['parameter_id'], 'exist', 'skipOnError' => true, 'targetClass' => Parameters::className(), 'targetAttribute' => ['parameter_id' => 'parameter_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_parameter_id' => 'Product Parameter ID',
            'product_id' => 'Product ID',
            'parameter_id' => 'Parameter ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(ProductMaster::className(), ['product_master_id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParameter()
    {
        return $this->hasOne(Parameters::className(), ['parameter_id' => 'parameter_id']);
    }
}
