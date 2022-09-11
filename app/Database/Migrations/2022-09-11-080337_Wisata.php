<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Wisata extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'      => 'int',
                'constraint' => 5,
                'unsigned'  => true,
                'auto_increment' => true,
            ],
            'tempat' => [
                'type'  => 'varchar',
                'constraint' => '100',
            ],
            'harga'   => [
                'type'  => 'int',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('wisata');
    }

    public function down()
    {
        $this->forge->dropTable('wisata');
    }
}
