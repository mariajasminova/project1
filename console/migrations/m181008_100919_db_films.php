<?php

use yii\db\Migration;

/**
 * Class m181008_100919_db_films
 */
class m181008_100919_db_films extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute(file_get_contents(__DIR__ . '/fourth_task.sql'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181008_100919_db_films cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181008_100919_db_films cannot be reverted.\n";

        return false;
    }
    */
}
