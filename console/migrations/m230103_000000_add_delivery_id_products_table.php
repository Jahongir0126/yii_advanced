<?php

use \yii\db\Migration;

class m230103_000000_add_delivery_id_products_table extends Migration
{
    public function up()
    {
        $this->addColumn('products', 'delivery_id', $this->integer()->notNull());

        // Создаём внешний ключ
        $this->addForeignKey(
            'fk-products-delivery_id',
            'products',
            'delivery_id',
            'delivery',
            'id',
            'CASCADE'
        );

    }
    public function down()
    {
        // Удаляем внешний ключ и колонку, если нужно откатить миграцию
        $this->dropForeignKey('fk-products-delivery_id', 'products');
        $this->dropColumn('products', 'delivery_id');
    }

}