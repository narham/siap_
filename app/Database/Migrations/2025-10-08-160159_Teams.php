<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Teams extends Migration
{
    public function up()
    {
        // Membuat tabel teams
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'logo' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'stadium' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true,
            ],
            'founded' => [
                'type'       => 'YEAR',
                'null'       => true,
            ],
            
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('teams'); 

    }

    public function down()
    {
        // Menghapus tabel teams
        $this->forge->dropTable('teams');
    }
}