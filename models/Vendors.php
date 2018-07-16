<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vendors".
 *
 * @property int $vendor_id
 * @property string $name
 * @property string $photo
 * @property string $email
 * @property int $phone
 * @property string $address
 * @property string $office_address
 * @property string $contact_person_name
 * @property string $created_at
 * @property int $is_deleted
 * @property string $website
 * @property string $country_id
 * @property string $state_id
 * @property string $city_id
 * @property string $account_number
 * @property string $bank_ifsc
 * @property string $gstin
 * @property string $pan
 * @property string $flat
 * @property string $street

 */
class Vendors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vendors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'photo', 'email', 'address', 'office_address', 'contact_person_name', 'website',
                'street','flat','pan','gstin','bank_ifsc','account_number','city_id','state_id',
                'country_id'

            ], 'required'],
            [['phone', 'is_deleted'], 'integer'],
            [['address', 'office_address'], 'string'],
            [['created_at'], 'safe'],
            [['name', 'email'], 'string', 'max' => 100],
            [['photo', 'contact_person_name'], 'string', 'max' => 255],
            [['website'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'vendor_id' => 'Vendor ID',
            'name' => 'Name',
            'photo' => 'Photo',
            'email' => 'Email',
            'phone' => 'Phone',
            'address' => 'Address',
            'office_address' => 'Office Address',
            'contact_person_name' => 'Contact Person Name',
            'created_at' => 'Created At',
            'is_deleted' => 'Is Deleted',
            'website' => 'Website',
            'country_id' => 'Country',
            'city_id' => 'City',
            'state_id' => 'State',
        ];
    }

    public function getCity()
    {
        return $this->hasOne(Cities::className(), ['id' => 'city_id']);
    }
    public function getState()
    {
        return $this->hasOne(States::className(), ['id' => 'state_id']);
    }
    public function getCountry()
    {
        return $this->hasOne(Countries::className(), ['id' => 'country_id']);
    }
}
