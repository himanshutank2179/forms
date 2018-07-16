<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "process_master".
 *
 * @property int $process_master_id
 * @property string $name
 * @property int $is_deleted
 * @property string $created_at
 */
class ProcessMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'process_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'created_at'], 'required'],
            [['is_deleted'], 'integer'],
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'process_master_id' => 'Process Master ID',
            'name' => 'Name',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
        ];
    }
}
