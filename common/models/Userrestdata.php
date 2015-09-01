<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "userrestdata".
 *
 * @property integer $UserDetailId
 * @property integer $UserId
 * @property string $FacebookData
 * @property string $TwitterData
 * @property string $Comment
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Users $user
 */
class Userrestdata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userrestdata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UserId', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['FacebookData', 'TwitterData', 'Comment'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'UserDetailId' => 'User Detail ID',
            'UserId' => 'User ID',
            'FacebookData' => 'Facebook Data',
            'TwitterData' => 'Twitter Data',
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
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['UserId' => 'UserId']);
    }
}
