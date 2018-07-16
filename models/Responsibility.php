<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "responsibility".
 *
 * @property int $responsibility_id
 * @property string $responsibility
 *
 * @property Users[] $employees
 */
class Responsibility extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'responsibility';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['responsibility'], 'required'],
            [['responsibility'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'responsibility_id' => 'Responsibility ID',
            'responsibility' => 'Responsibility',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployees()
    {
        return $this->hasMany(Users::className(), ['responsibility_id' => 'responsibility_id']);
    }
}
