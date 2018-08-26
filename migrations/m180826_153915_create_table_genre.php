<?php

use yii\db\Migration;

/**
 * Class m180826_153915_create_table_genre
 */
class m180826_153915_create_table_genre extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('genre', [
            'id' => $this->primaryKey()->unsigned(),
            'genre_eng' => $this->string(40)->unique()->notNull(),
            'genre_mm' => $this->string(80)->unique()->notNull(),
        ]);

        $this->batchInsert('genre', ['genre_eng', 'genre_mm'], [
            ['Drama', 'ဒရမ်မာ'],
            ['Romance', 'အချစ်ဇာတ်လမ်း'],
            ['Comedy', 'ဟာသ']
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('genre');
        $this->dropTable('genre');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180826_153915_create_table_genre cannot be reverted.\n";

        return false;
    }
    */
}
