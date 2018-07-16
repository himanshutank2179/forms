<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clients".
 *
 * @property int $client_id
 * @property string $name
 * @property string $email
 * @property string $account_number
 * @property string $bank_ifsc
 * @property string $gstin
 * @property string $pan
 * @property string $flat
 * @property string $street
 * @property string $landmark
 * @property string $area
 * @property string $city
 * @property string $state
 * @property string $statecode
 * @property string $country
 * @property int $is_deleted
 * @property string $created_at
 */
class Clients extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clients';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'account_number', 'bank_ifsc', 'gstin', 'pan', 'flat', 'street', 'landmark', 'area', 'city', 'state', 'statecode', 'country', 'created_at'], 'required'],
            [['is_deleted'], 'integer'],
            [['created_at'], 'safe'],
            [['name', 'email', 'account_number', 'bank_ifsc', 'gstin', 'pan', 'flat', 'street', 'landmark', 'area', 'city', 'state', 'statecode', 'country'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'client_id' => 'Client ID',
            'name' => 'Name',
            'email' => 'Email',
            'account_number' => 'Account Number',
            'bank_ifsc' => 'Bank Ifsc',
            'gstin' => 'Gstin',
            'pan' => 'Pan',
            'flat' => 'Flat',
            'street' => 'Street',
            'landmark' => 'Landmark',
            'area' => 'Area',
            'city' => 'City',
            'state' => 'State',
            'statecode' => 'Statecode',
            'country' => 'Country',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
        ];
    }
}
