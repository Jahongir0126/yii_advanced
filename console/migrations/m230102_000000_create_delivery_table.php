<?php

use \yii\db\Migration;

class m230102_000000_create_delivery_table extends Migration
{
    public function up()
    {
        $this->createTable('delivery',[
            'id' =>$this->primaryKey(),
            'name'=>$this->string(255)->notNull(),
            'delivery_product'=>$this->string(255),
            'type'=>$this->string()->notNull(),
            'created_at'=>$this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')

        ]);

    }
    public function down()
    {
        $this->dropTable('delivery');
    }

}