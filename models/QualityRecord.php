<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "quality_record".
 *
 * @property int $quality_record_id
 * @property string $title
 * @property string $quality_record_no
 * @property string $revision
 * @property string $date_of_issue
 * @property string $retension
 * @property string $frequency
 * @property string $maintend_by
 * @property string $medium
 * @property int $is_deleted
 * @property string $created_at
 */
class QualityRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quality_record';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'quality_record_no', 'revision', 'date_of_issue', 'retension', 'frequency', 'maintend_by', 'medium', 'is_deleted', 'created_at'], 'required'],
            [['created_at'], 'safe'],
            [['title', 'quality_record_no', 'revision', 'date_of_issue', 'retension', 'frequency', 'maintend_by', 'medium'], 'string', 'max' => 255],
            [['is_deleted'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'quality_record_id' => 'Quality Record ID',
            'title' => 'Title',
            'quality_record_no' => 'Quality Record No',
            'revision' => 'Revision',
            'date_of_issue' => 'Date Of Issue',
            'retension' => 'Retension',
            'frequency' => 'Frequency',
            'maintend_by' => 'Maintend By',
            'medium' => 'Medium',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
        ];
    }
}
