<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "machine_master".
 *
 * @property int $machine_master_id
 * @property string $name
 * @property string $identification_no
 * @property string $mfg_by
 * @property string $machine_sr_no
 * @property string $installation_date
 * @property string $capacity
 * @property string $purchase_cost
 * @property string $location
 * @property string $remark
 * @property int $is_deleted
 * @property string $created_at
 */
class MachineMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'machine_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'identification_no', 'mfg_by', 'machine_sr_no', 'installation_date', 'capacity', 'purchase_cost', 'location', 'remark', 'created_at'], 'required'],
            [['installation_date', 'created_at', 'is_deleted'], 'safe'],
            [['remark'], 'string'],
            [['name', 'identification_no', 'mfg_by', 'machine_sr_no', 'capacity', 'purchase_cost', 'location'], 'string', 'max' => 255],
            [['is_deleted'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'machine_master_id' => 'Machine Master ID',
            'name' => 'Name',
            'identification_no' => 'Identification No',
            'mfg_by' => 'Manufacturer By',
            'machine_sr_no' => 'Machine Sr No',
            'installation_date' => 'Installation Date',
            'capacity' => 'Capacity',
            'purchase_cost' => 'Purchase Cost',
            'location' => 'Location',
            'remark' => 'Remark',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
        ];
    }
}
