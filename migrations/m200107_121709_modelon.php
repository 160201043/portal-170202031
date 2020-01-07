<?php

use yii\db\Migration;

class m200107_121709_modelon extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%modelon}}', [
            'id' => $this->primaryKey(),
            'userid' => $this->integer(11)->notNull(),
            'filmisim' => $this->string(80)->notNull(),
            'tur1' => $this->string(80)->notNull(),
            'tur2' => $this->string(80)->notNull(),
            'yorum' => $this->text()->notNull(),
            'puan' => $this->integer(11)->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%modelon}}');
    }
    
}
