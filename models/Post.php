<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property integer $category_id
 * @property integer $user_id
 * @property string $name
 * @property string $subject
 * @property string $content
 * @property string $date_added
 * @property string $ip
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'user_id', 'name', 'subject', 'content', 'ip'], 'required'],
            [['category_id', 'user_id'], 'integer'],
            [['content'], 'string'],
            [['date_added'], 'safe'],
            [['name'], 'string', 'max' => 80],
            [['subject'], 'string', 'max' => 255],
            [['ip'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'user_id' => 'User ID',
            'name' => 'Name',
            'subject' => 'Subject',
            'content' => 'Content',
            'date_added' => 'Date Added',
            'ip' => 'Ip',
        ];
    }

    public function getCategory()
    {
       return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
