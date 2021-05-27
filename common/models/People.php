<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "people".
 *
 * @property int $id
 * @property string $name
 * @property string $gender
 * @property string $citizenship
 * @property string $dob
 * @property string $pob
 * @property string $cob
 * @property string $ext_img
 * @property string $base_occupation
 */
class People extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'people';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'gender', 'citizenship', 'dob', 'pob', 'cob', 'ext_img', 'base_occupation'], 'required'],
            [['id'], 'integer'],
            [['dob'], 'safe'],
            [['ext_img'], 'string'],
            [['name', 'citizenship', 'pob', 'cob', 'base_occupation'], 'string', 'max' => 255],
            [['gender'], 'string', 'max' => 6],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'gender' => 'Gender',
            'citizenship' => 'Citizenship',
            'dob' => 'Dob',
            'pob' => 'Pob',
            'cob' => 'Cob',
            'ext_img' => 'Ext Img',
            'base_occupation' => 'Base Occupation',
        ];
    }

    public function getOccupations()
    {
        return $this->hasMany(PeopleOccupations::className(), ['person_id' => 'id']);
    }
}
