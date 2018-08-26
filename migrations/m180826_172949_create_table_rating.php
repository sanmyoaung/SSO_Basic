<?php

use yii\db\Migration;

/**
 * Class m180826_172949_create_table_rating
 */
class m180826_172949_create_table_rating extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('rating', [
            'id' => $this->primaryKey()->unsigned(),
            'rating_eng' => $this->string(40)->unique()->notNull(),
            'rating_mm' => $this->string(80)->unique()->notNull(),
        ]);

        $this->batchInsert('rating', ['rating_eng', 'rating_mm'], [
            ['General', 'General'],
            ['PG', 'PG'],
            ['R', 'R']
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('rating');
        $this->dropTable('rating');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180826_172949_create_table_rating cannot be reverted.\n";

        return false;
    }
    */
}
