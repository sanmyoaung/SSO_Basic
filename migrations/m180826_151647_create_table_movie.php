<?php

use yii\db\Migration;

/**
 * Class m180826_151647_create_table_movie
 */
class m180826_151647_create_table_movie extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('movie', [
            'id' => $this->primaryKey()->unsigned(),
            'name_en' => $this->string(80)->notNull(),
            'name_mm' => $this->string(255)->notNull(),
            'genre_id' => $this->integer(10)->notNull(),
            'rating_id' => $this->integer( 10)->notNull(),
            'duration' => $this->integer(4)->notNull(),
            'released' => $this->timestamp()->notNull(),
            'awards_eng' => $this->text()->notNull(),
            'awards_mm' => $this->text()->notNull(),
            'storyline_eng' => $this->text()->notNull(),
            'storyline_mm' => $this->text()->notNull(),
            'language_eng' => $this->string(80)->notNull(),
            'language_mm' => $this->string(80)->notNull(),
            'director_eng' => $this->string(80)->notNull(),
            'director_mm' => $this->string(80)->notNull(),
            'writer_eng' => $this->string(80)->notNull(),
            'writer_mm' => $this->string(80)->notNull(),
            'cast_eng' => $this->text()->notNull(),
            'cast_mm' => $this->text()->notNull(),
            'status' => $this->integer(1)->notNull(),
            'poster' => $this->string(255)->notNull(),
            'trailer' => $this->string(255)->notNull(),
            'fullvideo' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable('movie');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180826_151647_create_table_movie cannot be reverted.\n";

        return false;
    }
    */
}
