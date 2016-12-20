<?php
namespace frontend\models;
use Yii;
/**
 * This is the model class for table "teacher".
 *
 * @property integer $id
 * @property string $name
 *
 * Relations teacher table many-to-many student table
 * viaTable teacher_student
 * @property integer student_id
 * @property integer teacher_id
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * @return string (table name)
     */
    public static function tableName()
    {
        return 'teacher';
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
            'name' => 'Teacher Name',
        ];
    }
    /**
     * relation Many-to-Many: many Student - many Teacher
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Student::className(), ['id' => 'student_id'])
            ->viaTable('teacher_student', ['teacher_id' => 'id']);
    }
}