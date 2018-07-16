<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "operation_master".
 *
 * @property int $operation_master_id
 * @property string $name
 */
class OperationMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'operation_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'operation_master_id' => 'Operation Master ID',
            'name' => 'Name',
        ];
    }
}
