<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "itqt_one_acceptance_criteria".
 *
 * @property int $itqt_one_acceptance_criteria_id
 * @property int $itqt_one_planner_id
 * @property string $value
 * @property string $name
 *
 * @property ItqtOnePlanner $itqtOnePlanner
 */
class ItqtOneAcceptanceCriteria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'itqt_one_acceptance_criteria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['itqt_one_planner_id', 'value', 'name'], 'required'],
            [['itqt_one_planner_id'], 'integer'],
            [['value', 'name'], 'string', 'max' => 255],
            [['itqt_one_planner_id'], 'exist', 'skipOnError' => true, 'targetClass' => ItqtOnePlanner::className(), 'targetAttribute' => ['itqt_one_planner_id' => 'itqt_one_planner_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'itqt_one_acceptance_criteria_id' => 'Itqt One Acceptance Criteria ID',
            'itqt_one_planner_id' => 'Itqt One Planner ID',
            'value' => 'Value',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItqtOnePlanner()
    {
        return $this->hasOne(ItqtOnePlanner::className(), ['itqt_one_planner_id' => 'itqt_one_planner_id']);
    }
}
