<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "business".
 *
 * @property int $id
 * @property string $business_logo
 * @property string $business_banner
 * @property string $business_name
 * @property string $username
 * @property string $catagory
 * @property string $working_day
 * @property string $working_time
 * @property string $description
 * @property string $qr_code
 * @property string $number
 * @property string $email
 * @property string $website
 * @property string $area_pin
 * @property string $city
 * @property string $state
 * @property string $country
 * @property string $address
 * @property string $YLink
 * @property string $FLink
 * @property string $PLink
 * @property string $created_at
 * @property string $uid
 * @property string $status
 * @property string $security_pin
 * @property string $keyword
 * @property string $ip_addr
 * @property string $loc
 * @property string $os
 * @property string $token
 * @property int $vbid
 */
class Business extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'business';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['business_logo', 'business_banner', 'business_name', 'username', 'catagory', 'working_day', 'working_time', 'description', 'qr_code', 'number', 'email', 'website', 'area_pin', 'city', 'state', 'country', 'address', 'YLink', 'FLink', 'PLink', 'uid', 'security_pin', 'keyword', 'ip_addr', 'loc', 'os', 'token'], 'required'],
            [['description', 'YLink', 'FLink', 'PLink', 'keyword'], 'string'],
            [['created_at'], 'safe'],
            [['vbid'], 'integer'],
            [['business_logo', 'business_name', 'username', 'working_day', 'email', 'city', 'state', 'country', 'ip_addr', 'loc', 'os', 'token'], 'string', 'max' => 100],
            [['business_banner', 'working_time', 'area_pin'], 'string', 'max' => 50],
            [['catagory', 'qr_code', 'address'], 'string', 'max' => 255],
            [['number'], 'string', 'max' => 15],
            [['website'], 'string', 'max' => 155],
            [['uid'], 'string', 'max' => 11],
            [['status'], 'string', 'max' => 20],
            [['security_pin'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'business_logo' => 'Business Logo',
            'business_banner' => 'Business Banner',
            'business_name' => 'Business Name',
            'username' => 'Username',
            'catagory' => 'Catagory',
            'working_day' => 'Working Day',
            'working_time' => 'Working Time',
            'description' => 'Description',
            'qr_code' => 'Qr Code',
            'number' => 'Number',
            'email' => 'Email',
            'website' => 'Website',
            'area_pin' => 'Area Pin',
            'city' => 'City',
            'state' => 'State',
            'country' => 'Country',
            'address' => 'Address',
            'YLink' => 'Y Link',
            'FLink' => 'F Link',
            'PLink' => 'P Link',
            'created_at' => 'Created At',
            'uid' => 'Uid',
            'status' => 'Status',
            'security_pin' => 'Security Pin',
            'keyword' => 'Keyword',
            'ip_addr' => 'Ip Addr',
            'loc' => 'Loc',
            'os' => 'Os',
            'token' => 'Token',
            'vbid' => 'Vbid',
        ];
    }
}
