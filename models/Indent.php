<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "indent".
 *
 * @property int $indent_id
 * @property string $purchase_indent_no
 * @property string $date
 * @property string $purchase_monitoring
 * @property int $reviewed_by
 * @property string $remark
 * @property string $created_at
 */
class Indent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'indent';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['purchase_indent_no', 'date', 'purchase_monitoring', 'reviewed_by', 'remark', 'created_at'], 'required'],
            [['date', 'created_at'], 'safe'],
            [['reviewed_by'], 'integer'],
            [['remark'], 'string'],
            [['purchase_indent_no', 'purchase_monitoring'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'indent_id' => 'Indent ID',
            'purchase_indent_no' => 'Purchase Indent No',
            'date' => 'Date',
            'purchase_monitoring' => 'Purchase Monitoring',
            'reviewed_by' => 'Reviewed By',
            'remark' => 'Remark',
            'created_at' => 'Created At',
        ];
    }
}
