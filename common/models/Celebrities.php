<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "celebrities".
 *
 * @property int $id
 * @property string $name
 * @property string|null $short_description
 * @property string|null $net_worth_text
 * @property int|null $net_worth
 * @property string|null $currency
 * @property string|null $gender
 * @property string|null $dob
 * @property string|null $occupation
 * @property int|null $wiki_id
 * @property string|null $parent_category
 * @property string|null $category
 * @property string|null $height
 * @property string|null $citizenship
 * @property string|null $description
 * @property string|null $source_url
 * @property string|null $image
 */
class Celebrities extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'celebrities';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['net_worth', 'wiki_id'], 'integer'],
            [['description', 'source_url'], 'string'],
            [['name', 'short_description', 'net_worth_text', 'dob', 'occupation', 'parent_category', 'category', 'height', 'citizenship', 'image'], 'string', 'max' => 255],
            [['currency'], 'string', 'max' => 3],
            [['gender'], 'string', 'max' => 10],
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
            'short_description' => 'Short Description',
            'net_worth_text' => 'Net Worth Text',
            'net_worth' => 'Net Worth',
            'currency' => 'Currency',
            'gender' => 'Gender',
            'dob' => 'Dob',
            'occupation' => 'Occupation',
            'wiki_id' => 'Wiki ID',
            'parent_category' => 'Parent Category',
            'category' => 'Category',
            'height' => 'Height',
            'citizenship' => 'Citizenship',
            'description' => 'Description',
            'source_url' => 'Source Url',
            'image' => 'Image',
        ];
    }
}
