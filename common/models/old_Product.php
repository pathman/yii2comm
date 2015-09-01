<?php

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;

const MANUFACTURER_DEFAULT = 0;


/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $alternateName
 * @property string $description
 * @property string $name
 * @property integer $manufacturerID
 * @property string $manufacturerPartNumber
 * @property double $cost
 * @property double $price
 * @property integer $DateCreated
 * @property integer $LastUpdated
 */
class Product extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alternateName', 'description', 'name', 'DateCreated', 'LastUpdated'], 'required'],
            [['description'], 'string'],
            [['manufacturerID', 'DateCreated', 'LastUpdated'], 'integer'],
            [['cost', 'price'], 'number'],
            [['DateCreated', 'LastUpdated'], 'safe'],
            [['alternateName', 'name'], 'string', 'max' => 255],
            [['manufacturerPartNumber'], 'string', 'max' => 45],
            [['alternateName'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alternateName' => 'Alternate Name',
            'description' => 'Description',
            'name' => 'Name',
            'manufacturerID' => 'Manufacturer ID',
            'manufacturerPartNumber' => 'Manufacturer Part Number',
            'cost' => 'Cost',
            'price' => 'Price',
            'DateCreated' => 'Date Created',
            'LastUpdated' => 'Last Updated',
        ];
    }
    
    /**
     * @inheritdoc
     * 
     * set up some constants
     */
    public function setConstants()
    {
        
        $this->getManufacturers;
        
        foreach($rows as $row)
        {
           $name = $row['name'];
           $id = $row['id'];
           
           
        }
    }
    
    /**
     * @inheritdoc
     * 
     * Will create a list of name/value pairs for the drop down
     * 
     */
    public function getManufacturers()
    {
        $rows = (new \yii\db\Query())
            ->select('id', 'name')
            ->from('manufacturers')
            ->limit(100)
            ->all();
        
        return $rows;
    }
}
