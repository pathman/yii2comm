<?php

namespace common\models;


use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\helpers\Security;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "users".
 *
 * @property integer $UserId
 * @property integer $UserTypeId
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $Names
 * @property string $PreferredName
 * @property string $Surname
 * @property string $Gender
 * @property integer $Birthday
 * @property string $Website
 * @property string $FacebookId
 * @property string $TwitterId
 * @property boolean $IsLikedFanPage
 * @property string $PhotoUrl
 * @property boolean $IsPersonal
 * @property string $IdentityNumber
 * @property string $TaxNumber
 * @property string $TaxOffice
 * @property string $Comment
 * @property integer $role
 * @property integer $status
 * @property integer $lastLogin
 * @property integer $previousLogin
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Addresses[] $addresses
 * @property Logs[] $logs
 * @property Phones[] $phones
 * @property Userrestdata[] $userrestdatas
 * @property Usertypes $userType
 */
class Users extends ActiveRecord implements IdentityInterface
{    
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;
    const ROLE_USER = 10;
    
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
            ],
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {        
        return [
                      
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
            
            ['role', 'default', 'value' => self::ROLE_USER],
            ['role', 'in', 'range' => [self::ROLE_USER]],           
       
            [['UserTypeId', 'Birthday', 'role', 'status', 'lastLogin', 'previousLogin', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['IsLikedFanPage', 'IsPersonal'], 'boolean'],
            [['Comment'], 'string'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'Website'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['Names', 'PreferredName', 'Surname'], 'string', 'max' => 50],
            [['Gender'], 'string', 'max' => 1],
            [['FacebookId', 'TwitterId'], 'string', 'max' => 100],
            [['PhotoUrl'], 'string', 'max' => 1000],
            [['IdentityNumber'], 'string', 'max' => 11],
            [['TaxNumber', 'TaxOffice'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'UserId' => 'User ID',
            'UserTypeId' => 'User Type ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'Names' => 'Names',
            'PreferredName' => 'Preferred Name',
            'Surname' => 'Surname',
            'Gender' => 'Gender',
            'Birthday' => 'Birthday',
            'Website' => 'Website',
            'FacebookId' => 'Facebook ID',
            'TwitterId' => 'Twitter ID',
            'IsLikedFanPage' => 'Is Liked Fan Page',
            'PhotoUrl' => 'Photo Url',
            'IsPersonal' => 'Is Personal',
            'IdentityNumber' => 'Identity Number',
            'TaxNumber' => 'Tax Number',
            'TaxOffice' => 'Tax Office',
            'Comment' => 'Comment',
            'role' => 'Role',
            'status' => 'Status',
            'lastLogin' => 'Last Login',
            'previousLogin' => 'Previous Login',
            'LastUpdatedBy' => 'Last Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($UserId)
    {
        return static::findOne($UserId);
    }
    
    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }
    
    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }
    
    /**
     * Finds user by password reset token
     *
     * @param  string      $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        $expire = \Yii::$app->params['user.passwordResetTokenExpire'];
        $parts = explode('_', $token);
        $timestamp = (int) end($parts);
        if ($timestamp + $expire < time()) {
            // token expired
            return null;
        }
    
        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
            ]);
    }
    
    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }
    
    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }
    
    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
    
    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Security::validatePassword($password, $this->password_hash);
    }
    
    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Security::generatePasswordHash($password);
    }
    
    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Security::generateRandomKey();
    }
    
    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Security::generateRandomKey() . '_' . time();
    }
    
    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
    

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddresses()
    {
        return $this->hasMany(Addresses::className(), ['UserId' => 'UserId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLogs()
    {
        return $this->hasMany(Logs::className(), ['UserId' => 'UserId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhones()
    {
        return $this->hasMany(Phones::className(), ['UserId' => 'UserId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserrestdatas()
    {
        return $this->hasMany(Userrestdata::className(), ['UserId' => 'UserId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserType()
    {
        return $this->hasOne(Usertypes::className(), ['UserTypeId' => 'UserTypeId']);
    }
}
