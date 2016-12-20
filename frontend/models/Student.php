<?php
namespace frontend\models;
use Yii;
/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property string $name teacher table
 *
 * Relations student table many-to-many teacher table
 * viaTable teacher_student
 * @property integer student_id
 * @property integer teacher_id
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @return string (table name)
     */
    public static function tableName()
    {
        return 'student';
    }
    /**
     * @return array (rules)
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
        ];
    }
    /**
     * return array (attributeLabels)
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Student Name',
        ];
    }
    /**
     * relation Many-to-Many: many Student - many Teacher
     * @return \yii\db\ActiveQuery
     */
    public function getTeachers()
    {
        return $this->hasMany(Teacher::className(), ['id' => 'teacher_id'])
            ->viaTable('teacher_student', ['student_id' => 'id']);
    }
}