<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "training_planner".
 *
 * @property int $training_planner_id
 * @property string $name_of_training
 * @property string $period
 * @property string $type_of_training
 * @property int $user_id
 * @property string $designation
 * @property int $actual_trining_date
 * @property string $faculty
 * @property string $training_feedback
 * @property string $is_trained
 *
 * @property Users $users
 */
class TrainingPlanner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'training_planner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_of_training', 'period', 'type_of_training', 'user_id', 'designation', 'actual_trining_date', 'faculty', 'training_feedback'], 'required'],
            [['user_id'], 'integer'],
                [['is_trained'], 'safe'],
            [['training_feedback','actual_trining_date'], 'string'],
            [['name_of_training', 'period', 'type_of_training', 'designation', 'faculty'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'training_planner_id' => 'Training Planner ID',
            'name_of_training' => 'Name Of Training',
            'period' => 'Period',
            'type_of_training' => 'Type Of Training',
            'user_id' => 'Employee',
            'designation' => 'Designation',
            'actual_trining_date' => 'Actual Training Date',
            'faculty' => 'Faculty',
            'training_feedback' => 'Training Feedback',
            'is_trained' => 'Is Training Completed And Qualified?',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'user_id']);
    }
}
