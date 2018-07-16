<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "documents_files".
 *
 * @property int $documents_file_id
 * @property string $image
 * @property int $documents_and_distribution_master_id
 *
 * @property DocumentsAndDistributionMaster $documentsAndDistributionMaster
 */
class DocumentsFiles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'documents_files';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image', 'documents_and_distribution_master_id'], 'required'],
            [['documents_and_distribution_master_id'], 'integer'],
            [['image'], 'string', 'max' => 255],
            [['documents_and_distribution_master_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocumentsAndDistributionMaster::className(), 'targetAttribute' => ['documents_and_distribution_master_id' => 'documents_and_distribution_master_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'documents_file_id' => 'Documents File ID',
            'image' => 'Image',
            'documents_and_distribution_master_id' => 'Documents And Distribution Master ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocumentsAndDistributionMaster()
    {
        return $this->hasOne(DocumentsAndDistributionMaster::className(), ['documents_and_distribution_master_id' => 'documents_and_distribution_master_id']);
    }
}
