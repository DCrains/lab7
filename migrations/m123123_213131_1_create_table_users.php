<?php

use yii\db\Migration;

class m123123_213131_1_create_table_users extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
        
            'password' => $this->string(),
            'auth_key' => $this->string(100),
            'username' => $this->string(),
            'pasword' => $this->string(),
            'accestoken'=> $this->string(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%users}}');
    }
}

