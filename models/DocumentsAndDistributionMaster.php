<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "documents_and_distribution_master".
 *
 * @property int $documents_and_distribution_master_id
 * @property string $name_of_document
 * @property string $document_no
 * @property string $issue_no
 * @property string $revision
 * @property string $date_of_issue
 * @property string $copy_holders_department
 * @property string $sign_of_receiver
 * @property int $is_international
 * @property int $is_deleted
 * @property string $created_at
 */
class DocumentsAndDistributionMaster extends \yii\db\ActiveRecord
{
    public $images;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'documents_and_distribution_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_of_document', 'document_no', 'issue_no', 'revision', 'date_of_issue', 'copy_holders_department', 'sign_of_receiver', 'created_at'], 'required'],
            [['date_of_issue', 'is_international', 'created_at'], 'safe'],
            [['is_deleted'], 'integer'],
            [['name_of_document', 'document_no', 'issue_no', 'revision', 'copy_holders_department', 'sign_of_receiver'], 'string', 'max' => 255],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'documents_and_distribution_master_id' => 'Documents And Distribution Master ID',
            'name_of_document' => 'Name Of Document',
            'document_no' => 'Document No.',
            'issue_no' => 'Issue No',
            'revision' => 'Revision',
            'date_of_issue' => 'Date Of Issue',
            'copy_holders_department' => 'Copy Holder\'s Department',
            'sign_of_receiver' => 'Sign Of Receiver',
            'is_international' => 'Is International',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
        ];
    }
}
