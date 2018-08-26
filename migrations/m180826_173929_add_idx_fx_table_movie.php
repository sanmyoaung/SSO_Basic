<?php

use yii\db\Migration;

/**
 * Class m180826_173929_add_idx_fx_table_movie
 */
class m180826_173929_add_idx_fx_table_movie extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createIndex('idx_movie_rating_id_rating', 'movie', 'rating_id');
        $this->addForeignKey('fk_movie_rating_id_rating', 'movie', 'rating_id', 'rating', 'id', 'restrict', 'cascade');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_movie_rating_id_rating', 'movie');
        $this->dropIndex('idx_movie_rating_id_rating', 'movie');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180826_173929_add_idx_fx_table_movie cannot be reverted.\n";

        return false;
    }
    */
}
