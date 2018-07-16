<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "itqt_one_planner".
 *
 * @property int $itqt_one_planner_id
 * @property int $product_id
 * @property string $parameter
 * @property string $sampling_plan
 * @property string $record
 * @property string $resposi_ability
 * @property string $created_at
 *
 * @property ItqtOneAcceptanceCriteria[] $itqtOneAcceptanceCriterias
 */
class ItqtOnePlanner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'itqt_one_planner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'sampling_plan', 'record', 'resposi_ability', 'created_at'], 'required'],
            [['product_id'], 'integer'],
            [['created_at','parameter'], 'safe'],
            [['parameter', 'sampling_plan', 'record', 'resposi_ability'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'itqt_one_planner_id' => 'Itqt One Planner ID',
            'product_id' => 'Product',
            'parameter' => 'Parameter',
            'sampling_plan' => 'Sampling Plan',
            'record' => 'Record',
            'resposi_ability' => 'Resposi Ability',
            'created_at' => 'Created At',
        ];
    }

    public function getProduct()
    {
        return $this->hasOne(ProductMaster::className(), ['product_master_id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */

    public function getItqtOneAcceptanceCriterias()
    {
        return $this->hasMany(ItqtOneAcceptanceCriteria::className(), ['itqt_one_planner_id' => 'itqt_one_planner_id']);
    }
}
