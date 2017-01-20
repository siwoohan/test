<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $name
 * @property string $price
 * @property integer $qty
 * @property string $dateadded
 * @property integer $user_id
 */
class Product extends \yii\db\ActiveRecord
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
            [['name', 'price', 'qty', 'user_id'], 'required'],
            [['price'], 'number'],
            [['qty', 'user_id'], 'integer'],
            [['dateadded'], 'safe'],
            [['name'], 'string', 'max' => 255],
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
            'price' => 'Price',
            'qty' => 'Qty',
            'dateadded' => 'Dateadded',
            'user_id' => 'User ID',
        ];
    }
}
