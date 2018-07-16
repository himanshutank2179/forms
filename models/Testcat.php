<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "testcat".
 *
 * @property int $testcat_id
 * @property string $name
 */
class Testcat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'testcat';
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
            'testcat_id' => 'Testcat ID',
            'name' => 'Name',
        ];
    }
}
