<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "work_order".
 *
 * @property int $work_order_id
 * @property int $customer_id
 * @property string $date
 * @property string $production_monitoring
 * @property string $approved_by
 * @property string $created_at
 */
class WorkOrder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'work_order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id', 'date', 'production_monitoring', 'approved_by', 'created_at'], 'required'],
            [['customer_id'], 'integer'],
            [['date', 'created_at'], 'safe'],
            [['production_monitoring', 'approved_by'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'work_order_id' => 'Work Order',
            'customer_id' => 'Customer',
            'date' => 'Date',
            'production_monitoring' => 'Production Monitoring',
            'approved_by' => 'Approved By',
            'created_at' => 'Created At',
        ];
    }

    public function getClient()
    {
        return $this->hasOne(Clients::className(), ['client_id' => 'customer_id']);
    }
}
