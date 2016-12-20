<?php
namespace frontend\models;
use Yii;
/**
 * This is the model class for table "department".
 *
 * @property integer $id
 * @property string $department_name
 * @property integer $university_id
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * relations University table
     * @var $university_id
     */
    /**
     * @return string (table name)
     */
    public static function tableName()
    {
        return 'department';
    }
    /**
     * @return array (rules)
     */
    public function rules()
    {
        return [
            [['name', 'university_id'], 'required'],
        ];
    }
    /**
     * return array (attributeLabels)
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Department Name',
            'university_id' => 'University Id',
        ];
    }
    /**
     * relation Many-to-One: many Department, One Univer
     * @return \yii\db\ActiveQuery
     */
    public function getUniversity()
    {
        return $this->hasOne(University::className(), ['id' => 'university_id']);
    }
}