<?php

use yii\db\Migration;

/**
 * Handles the creation of table `teacher`.
 */
class m161220_135552_create_teacher_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('teacher', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('teacher');
    }
}
