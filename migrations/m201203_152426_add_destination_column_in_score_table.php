<?php

use yii\db\Migration;

class m201203_152426_add_destination_column_in_score_table extends Migration
{
    public function safeUp()
    {
        $this->addColumn("{{%score}}", 'destination', $this->string(30)->after('score'));
    }

    public function safeDown()
    {
        $this->dropColumn("{{%score}}", 'destination');

        return true;
    }

}
