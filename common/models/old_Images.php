<?php

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "images".
 *
 * @property integer $id
 * @property integer $productID
 * @property string $URL
 * @property string $type
 * @property integer $DateCreated
 * @property integer $LastUpdated
 */
class Images extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['productID', 'URL', 'type', 'DateCreated', 'LastUpdated'], 'required'],
            [['productID', 'DateCreated', 'LastUpdated'], 'integer'],
            [['DateCreated', 'LastUpdated'], 'safe'],
            [['URL'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 4]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'productID' => 'Product ID',
            'URL' => 'Url',
            'type' => 'Type',
            'DateCreated' => 'Date Created',
            'LastUpdated' => 'Last Updated',
        ];
    }
}
