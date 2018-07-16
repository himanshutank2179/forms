<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "help".
 *
 * @property int $help_id
 * @property string $title
 * @property string $description
 */
class Help extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'help';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'help_id' => 'Help ID',
            'title' => 'Title',
            'description' => 'Description',
        ];
    }
}
