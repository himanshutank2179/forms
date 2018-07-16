<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "forms".
 *
 * @property int $form_id
 * @property string $title
 * @property string $extra_note
 * @property string $content
 * @property int $is_deleted
 * @property string $created_at
 */
class Forms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'forms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content'], 'string'],
            [['is_deleted'], 'integer'],
            [['created_at'], 'safe'],
            [['title', 'extra_note'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'form_id' => 'Form ID',
            'title' => 'Title',
            'extra_note' => 'Extra Note',
            'content' => 'Content',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
        ];
    }
}
