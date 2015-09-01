<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "productpricehistories".
 *
 * @property integer $ProductPriceHistoryId
 * @property integer $ProductOptionPriceId
 * @property integer $ProductId
 * @property integer $ProductOptionCombinationId
 * @property string $OldPrice
 * @property string $NewPrice
 * @property string $Comment
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Productoptionprices $productOptionPrice
 * @property Products $product
 */
class Productpricehistories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'productpricehistories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductOptionPriceId'], 'required'],
            [['ProductOptionPriceId', 'ProductId', 'ProductOptionCombinationId', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['OldPrice', 'NewPrice'], 'number'],
            [['Comment'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProductPriceHistoryId' => 'Product Price History ID',
            'ProductOptionPriceId' => 'Product Option Price ID',
            'ProductId' => 'Product ID',
            'ProductOptionCombinationId' => 'Product Option Combination ID',
            'OldPrice' => 'Old Price',
            'NewPrice' => 'New Price',
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
    public function getProductOptionPrice()
    {
        return $this->hasOne(Productoptionprices::className(), ['ProductOptionPriceId' => 'ProductOptionPriceId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['ProductId' => 'ProductId']);
    }
}
