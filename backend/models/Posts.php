<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $post_id
 * @property string $post_title
 * @property string $post_author
 * @property string $post_time
 * @property string $post_content
 * @property string $post_tags
 * @property integer $post_status
 */
class Posts extends \yii\db\ActiveRecord
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
            [['post_title', 'post_content', 'post_tags'], 'required'],
            [['post_id', 'post_status'], 'integer'],
            [['post_title', 'post_content'], 'string'],
            [['post_time'], 'safe'],
            [['post_author'], 'string', 'max' => 50],
            [['post_tags'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_id' => 'Post ID',
            'post_title' => 'Post Title',
            'post_author' => 'Post Author',
            'post_time' => 'Post Time',
            'post_content' => 'Post Content',
            'post_tags' => 'Post Tags',
            'post_status' => 'Post Status',
        ];
    }
}
