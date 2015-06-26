<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m150626_102014_user Create User table
 */
class m150626_102014_user extends Migration
{
    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            '{{%user}}',
            [
                'id' => Schema::TYPE_PK,
                'status' => Schema::TYPE_SMALLINT . '(6) NOT NULL DEFAULT "20"',
                'created_at' => Schema::TYPE_INTEGER . '(11) NOT NULL',
                'updated_at' => Schema::TYPE_INTEGER . '(11) NOT NULL',
            ],
            $tableOptions
        );

    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
