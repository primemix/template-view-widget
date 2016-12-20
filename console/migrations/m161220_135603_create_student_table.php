<?php

use yii\db\Migration;

/**
 * Handles the creation of table `student`.
 */
class m161220_135603_create_student_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('student', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('student');
    }
}
