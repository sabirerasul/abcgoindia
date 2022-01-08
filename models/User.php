<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $mobile
 * @property string $dob
 * @property string $w_n
 * @property string $p
 * @property string $token
 * @property string $gender
 * @property string $created_at
 * @property string $status
 * @property string $profile_photo
 * @property string $job
 * @property string $homeplace_pin
 * @property string $homeplace_city
 * @property string $homeplace_state
 * @property string $homeplace_country
 * @property string $workplace_pin
 * @property string $workplace_city
 * @property string $workplace_state
 * @property string $workplace_country
 * @property string $otherplace_pin
 * @property string $otherplace_city
 * @property string $otherplace_state
 * @property string $otherplace_country
 * @property string $website
 * @property string $facebook
 * @property string $hobbie1
 * @property string $hobbie2
 * @property string $hobbie3
 * @property string $about
 * @property string $ip_addr
 * @property string $os
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'mobile', 'dob', 'w_n', 'p', 'token', 'gender', 'profile_photo', 'job', 'homeplace_pin', 'homeplace_city', 'homeplace_state', 'homeplace_country', 'workplace_pin', 'workplace_city', 'workplace_state', 'workplace_country', 'otherplace_pin', 'otherplace_city', 'otherplace_state', 'otherplace_country', 'website', 'facebook', 'hobbie1', 'hobbie2', 'hobbie3', 'about', 'ip_addr', 'os'], 'required'],
            [['created_at'], 'safe'],
            [['about'], 'string'],
            [['name', 'website', 'facebook'], 'string', 'max' => 100],
            [['email', 'profile_photo', 'job'], 'string', 'max' => 50],
            [['mobile', 'w_n'], 'string', 'max' => 15],
            [['dob'], 'string', 'max' => 12],
            [['p', 'os'], 'string', 'max' => 200],
            [['token'], 'string', 'max' => 150],
            [['gender', 'status'], 'string', 'max' => 10],
            [['homeplace_pin', 'homeplace_city', 'homeplace_state', 'homeplace_country', 'workplace_pin', 'workplace_city', 'workplace_state', 'workplace_country', 'otherplace_pin', 'otherplace_city', 'otherplace_state', 'otherplace_country', 'hobbie1', 'hobbie2', 'hobbie3'], 'string', 'max' => 20],
            [['ip_addr'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'mobile' => 'Mobile',
            'dob' => 'Dob',
            'w_n' => 'W N',
            'p' => 'P',
            'token' => 'Token',
            'gender' => 'Gender',
            'created_at' => 'Created At',
            'status' => 'Status',
            'profile_photo' => 'Profile Photo',
            'job' => 'Job',
            'homeplace_pin' => 'Homeplace Pin',
            'homeplace_city' => 'Homeplace City',
            'homeplace_state' => 'Homeplace State',
            'homeplace_country' => 'Homeplace Country',
            'workplace_pin' => 'Workplace Pin',
            'workplace_city' => 'Workplace City',
            'workplace_state' => 'Workplace State',
            'workplace_country' => 'Workplace Country',
            'otherplace_pin' => 'Otherplace Pin',
            'otherplace_city' => 'Otherplace City',
            'otherplace_state' => 'Otherplace State',
            'otherplace_country' => 'Otherplace Country',
            'website' => 'Website',
            'facebook' => 'Facebook',
            'hobbie1' => 'Hobbie1',
            'hobbie2' => 'Hobbie2',
            'hobbie3' => 'Hobbie3',
            'about' => 'About',
            'ip_addr' => 'Ip Addr',
            'os' => 'Os',
        ];
    }
}
