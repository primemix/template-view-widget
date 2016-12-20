<?php

use yii\db\Migration;

/**
 * Handles the creation of table `university`.
 */
class m161220_133104_create_university_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('university', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('university');
    }
}
