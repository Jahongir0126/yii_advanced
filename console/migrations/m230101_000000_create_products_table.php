<?php

use \yii\db\Migration;

class m230101_000000_create_products_table extends Migration
{
    public function up()
    {
        $this->createTable('products',[
            'id' =>$this->primaryKey(),
            'name'=>$this->string(255)->notNull(),
            'price'=>$this->decimal(10,2)->notNull(),
            'description'=>$this->text()->notNull(),
            'created_at'=>$this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')

        ]);

    }
    public function down()
    {
        $this->dropTable('products');
    }

}