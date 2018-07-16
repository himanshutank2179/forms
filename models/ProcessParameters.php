<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "process_parameters".
 *
 * @property int $process_parameter_id
 * @property int $process_master_id
 * @property int $parameter_id
 */
class ProcessParameters extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'process_parameters';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['process_master_id', 'parameter_id'], 'required'],
            [['process_master_id', 'parameter_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'process_parameter_id' => 'Process Parameter ID',
            'process_master_id' => 'Process Master ID',
            'parameter_id' => 'Parameter ID',
        ];
    }
}
