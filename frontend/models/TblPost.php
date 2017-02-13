<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tbl_post".
 *
 * @property integer $id_post
 * @property string $title
 * @property string $intro
 * @property string $content
 * @property string $picture
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 * @property integer $user
 *
 * @property User $user0
 */
class TblPost extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'intro', 'content', 'picture', 'status', 'created_at', 'updated_at', 'user'], 'required'],
            [['intro', 'content'], 'string'],
            [['status', 'user'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'picture'], 'string', 'max' => 255],
            [['user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_post' => 'Id Post',
            'title' => 'Title',
            'intro' => 'Intro',
            'content' => 'Content',
            'picture' => 'Picture',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user' => 'User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser0()
    {
        return $this->hasOne(User::className(), ['id' => 'user']);
    }
}
