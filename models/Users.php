<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "users".
 *
 * @property int $user_id
 * @property string $emp_code
 * @property string $name
 * @property string $email
 * @property string $profile_pic
 * @property string $username
 * @property string $education_qualification
 * @property string $professional_education
 * @property string $designation
 * @property string $experience
 * @property int $responsibility_id
 * @property string $authority
 * @property string $signature_of_staff
 * @property int $is_deleted
 * @property string $password
 * @property string $created_at
 *
 * @property Responsibility $responsibility
 */
class Users extends \yii\db\ActiveRecord implements IdentityInterface
{
    public $authKey;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emp_code', 'name', 'education_qualification', 'professional_education', 'designation', 'experience', /*'authority', 'signature_of_staff'*/], 'required'],
            [['education_qualification', 'professional_education', 'email', 'username'], 'string'],
            [['is_deleted'], 'integer'],
            [['email'], 'email'],
            [['is_deleted', 'created_at', 'responsibility_id', 'authKey', 'password','profile_pic'], 'safe'],
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
            'user_id' => 'Users ID',
            'emp_code' => 'Users Code',
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
        return $this->hasMany(EmployeeResponsibility::className(), ['user_id' => 'user_id']);
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        $dbUser = Users::find()->where(["accessToken" => $token])->one();
        if (!count($dbUser)) {
            return null;
        }
        return new static($dbUser);
    }


    /**
     * Finds user by username
     *
     * @param  string $username
     * @return static|null
     */


    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }


    public static function findByEmail($username)
    {
        return static::findOne(['email' => $username]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->user_id;
    }


    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->getSecurity()->validatePassword($password, $this->password);
    }

    public function setPassword($password)
    {
        $this->password = Yii::$app->security->generatePasswordHash($password);
    }
}
