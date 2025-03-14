<?php

use \yii\db\Migration;

class m240104_000000_create_product_details extends Migration
{
    public function up()
    {
        $this->createTable('product_details', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer()->notNull(),
            'brand' => $this->string(255),
            'material' => $this->string(255),
            'color' => $this->string(255),
            'created_at' => $this->timestamp()->notNull()
                ->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->defaultValue(null),
            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->defaultValue(null),
        ]);
        $this->createIndex('idx-product_details-product_id', 'product_details', 'product_id');
        $this->addForeignKey(
            'fk-product_details-product_id',
            'product_details',
            'product_id',
            'products',
            'id',
            'CASCADE',
            'CASCADE'
        );
        $this->createIndex('idx-product_details-created_by', 'product_details', 'created_by');
        $this->addForeignKey(
            'fk-product_details-created_by',
            'product_details',
            'created_by',
            'users',
            'id',
            'CASCADE',
            'CASCADE'
        );
        $this->createIndex('idx-product_details-updated_by', 'product_details', 'updated_by');
        $this->addForeignKey(
            'fk-product_details-updated_by',
            'product_details',
            'updated_by',
            'users',
            'id',
            'SET NULL',
            'CASCADE'
        );



    }
    public function down()
    {
        $this->dropForeignKey('fk-product_details-product_id', 'product_details');
        $this->dropIndex('idx-product_details-product_id', 'product_details');

        $this->dropForeignKey('fk-product_details-created_by', 'product_details');
        $this->dropIndex('idx-product_details-created_by', 'product_details');

        $this->dropForeignKey('fk-product_details-updated_by', 'product_details');
        $this->dropIndex('idx-product_details-updated_by', 'product_details');

        $this->dropTable('product_details');
    }

}