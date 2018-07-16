<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property int $employee_id
 * @property string $emp_code
 * @property string $name
 * @property string $education_qualification
 * @property string $professional_education
 * @property string $designation
 * @property string $experience
 * @property int $responsibility_id
 * @property string $authority
 * @property string $signature_of_staff
 * @property int $is_deleted
 * @property string $created_at
 *
 * @property Responsibility $responsibility
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emp_code', 'name', 'education_qualification', 'professional_education', 'designation', 'experience', 'authority', 'signature_of_staff'], 'required'],
            [['education_qualification', 'professional_education'], 'string'],
            [['is_deleted'], 'integer'],
            [['is_deleted', 'created_at', 'responsibility_id'], 'safe'],
            [['emp_code', 'name', 'designation', 'experience', 'authority', 'signature_of_staff'], 'string', 'max' => 255],
           /* [['responsibility_id'], 'exist', 'skipOnError' => true, 'targetClass' => Responsibility::className(), 'targetAttribute' => ['responsibility_id' => 'responsibility_id']],*/
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'employee_id' => 'Employee ID',
            'emp_code' => 'Emp Code',
            'name' => 'Name',
            'education_qualification' => 'Education Qualification',
            'professional_education' => 'Professional Education',
            'designation' => 'Designation',
            'experience' => 'Experience',
            'responsibility_id' => 'Responsibilities',
            'authority' => 'Authority',
            'signature_of_staff' => 'Signature Of Staff',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployeeResponsibility()
    {
        return $this->hasMany(EmployeeResponsibility::className(), ['employee_id' => 'employee_id']);
    }
}
