<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "people_occupations".
 *
 * @property int $person_id
 * @property int $occupation_id
 * @property string $title
 */
class PeopleOccupations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'people_occupations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['person_id', 'occupation_id', 'title'], 'required'],
            [['person_id', 'occupation_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['person_id', 'occupation_id'], 'unique', 'targetAttribute' => ['person_id', 'occupation_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'person_id' => 'Person ID',
            'occupation_id' => 'Occupation ID',
            'title' => 'Title',
        ];
    }
}
