<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jobcard".
 *
 * @property int $jobcard_id
 * @property string $date
 * @property int $product_description
 * @property int $finish_product_id valve_id
 * @property string $material
 * @property string $size
 * @property string $qty
 * @property string $class
 * @property string $remark
 * @property int $is_deleted
 * @property string $created_at
 *
 * @property ProductMaster $finishProduct
 * @property JobcardOperationDetails[] $jobcardOperationDetails
 * @property JobcardRawMaterials[] $jobcardRawMaterials
 */
class Jobcard extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jobcard';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'finish_product_id', 'size', 'qty',  'created_at'], 'required'],
            [['product_description', 'date', 'created_at'], 'safe'],
            [['finish_product_id', 'is_deleted'], 'integer'],
            [['remark'], 'string'],
            [['material', 'size', 'qty', 'class'], 'string', 'max' => 255],
            [['finish_product_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductMaster::className(), 'targetAttribute' => ['finish_product_id' => 'product_master_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jobcard_id' => 'Jobcard ID',
            'date' => 'Date',
            'product_description' => 'Product Description',
            'finish_product_id' => 'Valve',
            'material' => 'Material',
            'size' => 'Size',
            'qty' => 'Quantity',
            'class' => 'Class',
            'remark' => 'Remark',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFinishProduct()
    {
        return $this->hasOne(ProductMaster::className(), ['product_master_id' => 'finish_product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobcardOperationDetails()
    {
        return $this->hasMany(JobcardOperationDetails::className(), ['jobcard_id' => 'jobcard_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobcardRawMaterials()
    {
        return $this->hasMany(JobcardRawMaterials::className(), ['jobcard_id' => 'jobcard_id']);
    }
    public function getJobcardOperationParameter()
    {
        return $this->hasMany(JobcardOperationParameter::className(), ['jobcard_id' => 'jobcard_id']);
    }
}
