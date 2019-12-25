<?php

use yii\db\Migration;

class m123123_213131_5_create_table_answers extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'name' => mediumtext(),
            'true' => integer(),
            'id_test' => integer(),
            'id_questions' => integer(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%users}}');
    }
}
