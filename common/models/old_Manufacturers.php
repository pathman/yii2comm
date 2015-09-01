<?php

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "manufacturers".
 *
 * @property integer $id
 * @property string $name
 * @property integer '$LastUpdated' 
 * @property integer '$DateCreated'
 * 
 */
class Manufacturers extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'manufacturers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'DateCreated', 'LastUpdated'], 'required'],
            [['DateCreated', 'LastUpdated'], 'integer'],
            [['DateCreated', 'LastUpdated'], 'safe'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'DateCreated' => 'Date Created',
            'LastUpdated' => 'Last Updated',
        ];
    }
}
