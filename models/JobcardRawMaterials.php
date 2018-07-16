<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jobcard_raw_materials".
 *
 * @property int $jobcard_raw_material_id
 * @property string $item_name
 * @property int $qty
 * @property int $heat_no
 * @property int $lot_no
 * @property int $tc_no
 * @property int $jobcard_id
 *
 * @property Jobcard $jobcard
 */
class JobcardRawMaterials extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jobcard_raw_materials';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_name', 'qty', 'heat_no', 'jobcard_id'], 'required'],
            [['qty', 'heat_no', 'lot_no', 'tc_no', 'jobcard_id'], 'integer'],
            [['item_name'], 'string', 'max' => 255],
            [['jobcard_id'], 'exist', 'skipOnError' => true, 'targetClass' => Jobcard::className(), 'targetAttribute' => ['jobcard_id' => 'jobcard_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jobcard_raw_material_id' => 'Jobcard Raw Material ID',
            'item_name' => 'Item Name',
            'qty' => 'Qty',
            'heat_no' => 'Heat No',
            'lot_no' => 'Lot No',
            'tc_no' => 'Tc No',
            'jobcard_id' => 'Jobcard ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobcard()
    {
        return $this->hasOne(Jobcard::className(), ['jobcard_id' => 'jobcard_id']);
    }
}
