<?php

use yii\db\Migration;

class m201202_152904_create_score_table extends Migration
{

    public function up()
    {
        $this->createTable('{{%score}}', [
            'id' => $this->primaryKey(),
            'ip' => $this->string(128),
            'score' => $this->integer(5),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
        
    }

    public function down()
    {
        $this->dropTable('{{%score}}');

        return true;
    }
}
