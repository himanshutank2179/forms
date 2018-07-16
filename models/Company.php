<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property int $company_id
 * @property string $name
 * @property string $email
 * @property string $image
 * @property string $contact_person_no
 * @property string $account_number
 * @property string $bank_ifsc
 * @property string $gstin
 * @property string $pan
 * @property string $flat
 * @property string $street
 * @property string $landmark
 * @property string $area
 * @property int $city_id
 * @property int $state_id
 * @property int $country_id
 * @property int $is_deleted
 * @property string $created_at
 *
 * @property States $state
 * @property Cities $city
 * @property Countries $country
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'contact_person_no', 'account_number', 'bank_ifsc', 'gstin', 'pan', 'flat', 'street', 'landmark', 'area', 'city_id', 'state_id', 'country_id', 'created_at'], 'required'],
            [['city_id', 'state_id', 'country_id', 'is_deleted'], 'integer'],
            [['created_at','image'], 'safe'],
            [['name', 'email', 'contact_person_no', 'account_number', 'bank_ifsc', 'gstin', 'pan', 'flat', 'street', 'landmark', 'area'], 'string', 'max' => 255],
            [['state_id'], 'exist', 'skipOnError' => true, 'targetClass' => States::className(), 'targetAttribute' => ['state_id' => 'id']],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cities::className(), 'targetAttribute' => ['city_id' => 'id']],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Countries::className(), 'targetAttribute' => ['country_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'company_id' => 'Company ID',
            'name' => 'Name',
            'email' => 'Email',
            'contact_person_no' => 'Contact Person Mobile No',
            'account_number' => 'Account Number',
            'bank_ifsc' => 'Bank Ifsc',
            'gstin' => 'Gstin',
            'pan' => 'Pan',
            'flat' => 'Flat',
            'street' => 'Street',
            'landmark' => 'Landmark',
            'area' => 'Area',
            'city_id' => 'City',
            'state_id' => 'State',
            'country_id' => 'Country',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getState()
    {
        return $this->hasOne(States::className(), ['id' => 'state_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(Cities::className(), ['id' => 'city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Countries::className(), ['id' => 'country_id']);
    }
}
