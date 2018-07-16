<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "training_master".
 *
 * @property int $training_master_id
 * @property string $name_of_training
 * @property string $period
 */
class TrainingMaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'training_master';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_of_training', 'period'], 'required'],
            [['name_of_training', 'period'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'training_master_id' => 'Training Master ID',
            'name_of_training' => 'Name Of Training',
            'period' => 'Period',
        ];
    }
}
