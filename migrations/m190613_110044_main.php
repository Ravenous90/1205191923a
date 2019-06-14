<?php

use yii\db\Migration;

/**
 * Class m190613_110044_main
 */
class m190613_110044_main extends Migration
{
    public function safeUp()
    {
        $this->createTable('addresses', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'city_id' => $this->integer()->notNull(),
            'area_id' => $this->integer()->notNull(),
            'street' => $this->string(255),
            'house' => $this->string(255),
            'add_info' => $this->text(),
        ]);

        $this->createTable('cities', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
        ]);

        $this->createTable('areas', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'city_id' => $this->integer()->notNull(),
        ]);

        $this->createIndex(
            'idx-addresses-city_id',
            'addresses',
            'city_id'
        );
        $this->addForeignKey(
            'fk-addresses-city_id',
            'addresses',
            'city_id',
            'cities',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-addresses-area_id',
            'addresses',
            'area_id'
        );
        $this->addForeignKey(
            'fk-addresses-area_id',
            'addresses',
            'area_id',
            'areas',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-areas-city_id',
            'areas',
            'city_id'
        );
        $this->addForeignKey(
            'fk-areas-city_id',
            'areas',
            'city_id',
            'cities',
            'id',
            'CASCADE'
        );

        $this->insert('cities', [
           'name' => 'Kharkiv',
        ]);
        $this->insert('cities', [
            'name' => 'Lviv',
        ]);
        $this->insert('cities', [
            'name' => 'Kiev',
        ]);
        $this->insert('areas', [
            'name' => 'Industrial',
            'city_id' => 1
        ]);
        $this->insert('areas', [
            'name' => 'Novobavarskii',
            'city_id' => 1
        ]);
        $this->insert('areas', [
            'name' => 'Holodnogorsii',
            'city_id' => 1
        ]);
        $this->insert('areas', [
            'name' => 'Podolskii',
            'city_id' => 3
        ]);
        $this->insert('areas', [
            'name' => 'Obolonskii',
            'city_id' => 3
        ]);
        $this->insert('areas', [
            'name' => 'Pecherskii',
            'city_id' => 3
        ]);
        $this->insert('areas', [
            'name' => 'Shevchenkivskii',
            'city_id' => 2
        ]);
        $this->insert('areas', [
            'name' => 'Frankovskii',
            'city_id' => 2
        ]);
        $this->insert('areas', [
            'name' => 'Zaliznichnii',
            'city_id' => 2
        ]);

    }

    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-areas-city_id',
            'areas'
        );
        $this->dropIndex(
            'idx-areas-city_id',
            'areas'
        );

        $this->dropForeignKey(
            'fk-addresses-area_id',
            'addresses'
        );
        $this->dropIndex(
            'idx-addresses-area_id',
            'addresses'
        );

        $this->dropForeignKey(
            'fk-addresses-city_id',
            'addresses'
        );
        $this->dropIndex(
            'idx-addresses-city_id',
            'addresses'
        );

        $this->dropTable('areas');
        $this->dropTable('cities');
        $this->dropTable('addresses');
    }
}
