<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee_responsibility".
 *
 * @property int $employee_responsibility_id
 * @property int $user_id
 * @property int $responsibility_id
 *
 * @property Users $user
 * @property Responsibility $responsibility
 */
class EmployeeResponsibility extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee_responsibility';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'responsibility_id'], 'required'],
            [['user_id', 'responsibility_id'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'user_id']],
            [['responsibility_id'], 'exist', 'skipOnError' => true, 'targetClass' => Responsibility::className(), 'targetAttribute' => ['responsibility_id' => 'responsibility_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'employee_responsibility_id' => 'Users Responsibility ID',
            'user_id' => 'Users ID',
            'responsibility_id' => 'Responsibility ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResponsibility()
    {
        return $this->hasOne(Responsibility::className(), ['responsibility_id' => 'responsibility_id']);
    }
}
