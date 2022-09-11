<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use PHPUnit\Framework\Constraint\Constraint;

class Pemesanan extends Migration
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
            'nama' => [
                'type'  => 'varchar',
                'constraint' => '100',
            ],
            'nik'   => [
                'type'  => 'int',
                'constraint' => 16,
                'unsigned' => true,
            ],
            'p_number'   => [
                'type'  => 'int',
                'constraint' => 12,
                'unsigned' => true,
            ],
            'wisata_id'   => [
                'type'  => 'int',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'tgl_kunjungan'   => [
                'type'  => 'date'
            ],
            'p_dewasa'   => [
                'type'  => 'varchar',
                'constraint' => 11
            ],
            'p_anak'   => [
                'type'  => 'varchar',
                'constraint' => 11
            ],
            't_bayar'   => [
                'type'  => 'int',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'

        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('pemesanan');
    }

    public function down()
    {
        $this->forge->dropTable('pemesanan');
    }
}
