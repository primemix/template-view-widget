<?php

use yii\db\Migration;

/**
 * Handles the creation of table `department`.
 * Has foreign keys to the tables:
 *
 * - `university`
 */
class m161220_134952_create_department_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('department', [
            'id' => $this->primaryKey(),
            'university_id' => $this->integer()->notNull(),
            'name' => $this->string(),
        ]);

        // creates index for column `university_id`
        $this->createIndex(
            'idx-department-university_id',
            'department',
            'university_id'
        );

        // add foreign key for table `university`
        $this->addForeignKey(
            'fk-department-university_id',
            'department',
            'university_id',
            'university',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `university`
        $this->dropForeignKey(
            'fk-department-university_id',
            'department'
        );

        // drops index for column `university_id`
        $this->dropIndex(
            'idx-department-university_id',
            'department'
        );

        $this->dropTable('department');
    }
}
