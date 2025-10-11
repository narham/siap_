<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMatchesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'home_team' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'away_team' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'match_date' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'location' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'home_score' => [
                'type' => 'INT',
                'constraint' => 3,
                'null' => true,
                'default' => null,
            ],
            'away_score' => [
                'type' => 'INT',
                'constraint' => 3,
                'null' => true,
                'default' => null,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('matches');
    }

    public function down()
    {
        $this->forge->dropTable('matches');
    }
}
