<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "business_items".
 *
 * @property int $id
 * @property string $items
 * @property string $picture
 * @property string $video
 * @property string $price
 * @property string $link
 * @property string $description
 * @property string $rand_code
 * @property string $uid
 * @property string $keyword
 * @property string $imei
 * @property string $ip_addr
 * @property string $loc
 * @property string $os
 * @property string $created_at
 * @property string $bid
 */
class BusinessItems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'business_items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['items', 'picture', 'video', 'price', 'link', 'description', 'rand_code', 'uid', 'keyword', 'imei', 'ip_addr', 'loc', 'os', 'bid'], 'required'],
            [['link', 'description'], 'string'],
            [['created_at'], 'safe'],
            [['items', 'picture'], 'string', 'max' => 255],
            [['video'], 'string', 'max' => 150],
            [['price', 'keyword', 'imei', 'ip_addr', 'loc', 'os'], 'string', 'max' => 100],
            [['rand_code'], 'string', 'max' => 20],
            [['uid', 'bid'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'items' => 'Items',
            'picture' => 'Picture',
            'video' => 'Video',
            'price' => 'Price',
            'link' => 'Link',
            'description' => 'Description',
            'rand_code' => 'Rand Code',
            'uid' => 'Uid',
            'keyword' => 'Keyword',
            'imei' => 'Imei',
            'ip_addr' => 'Ip Addr',
            'loc' => 'Loc',
            'os' => 'Os',
            'created_at' => 'Created At',
            'bid' => 'Bid',
        ];
    }
}
