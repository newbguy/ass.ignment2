<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userlist".
 *
 * @property integer $id
 * @property string $name
 * @property string $gender
 * @property string $dob
 * @property string $experience
 * @property string $industry
 * @property string $location
 * @property string $about
 * @property string $pic
 * @property string $ptitle
 * @property string $clevel
 * @property string $comlevel
 * @property string $olevel
 * @property string $jlevel
 * @property string $address
 * @property integer $phone
 * @property string $website
 * @property string $email
 */
class Userlist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userlist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address', 'phone', 'website', 'email'], 'required'],
            [['dob', 'gender', 'dob', 'experience', 'industry', 'location', 'about', 'pic', 'ptitle', 'clevel', 'comlevel', 'olevel', 'jlevel',], 'safe'],
            [['phone'], 'integer'],
            [['name', 'experience', 'industry', 'location', 'about', 'pic', 'ptitle', 'clevel', 'comlevel', 'olevel', 'jlevel', 'website', 'email'], 'string', 'max' => 200],
            [['gender'], 'string', 'max' => 10],
            [['address'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'gender' => 'Gender',
            'dob' => 'Date of Birth',
            'experience' => 'Years of Experience',
            'industry' => 'Industry',
            'location' => 'Location',
            'about' => 'About',
            'pic' => 'Picture',
            'ptitle' => 'Professional Title',
            'clevel' => 'Career Level',
            'comlevel' => 'Communication Level',
            'olevel' => 'Organizational Level',
            'jlevel' => 'Job Related Level',
            'address' => 'Address',
            'phone' => 'Phone',
            'website' => 'Website',
            'email' => 'E-mail',
        ];
    }
}
