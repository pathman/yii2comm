<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "usertypes".
 *
 * @property integer $UserTypeId
 * @property string $Name
 * @property string $Description
 * @property string $Comment
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Users[] $users
 */
class Usertypes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usertypes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Description', 'Comment'], 'string'],
            [['LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'UserTypeId' => 'User Type ID',
            'Name' => 'Name',
            'Description' => 'Description',
            'Comment' => 'Comment',
            'LastUpdatedBy' => 'Last Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['UserTypeId' => 'UserTypeId']);
    }
}
