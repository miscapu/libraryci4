<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserTable extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
              'id'  =>  [
                  'type'            =>  'INT',
                  'unsigned'        =>  true,
                  'auto_increment'  =>  true
              ],

              'firstname'  =>  [
                  'type'            =>  'VARCHAR',
                  'constraint'      =>   '50',
              ],

              'lastname'  =>  [
                  'type'            =>  'VARCHAR',
                  'constraint'      =>   '80',
              ],

              'email'  =>  [
                  'type'            =>  'VARCHAR',
                  'constraint'      =>   '50',
              ],

              'password'  =>  [
                  'type'            =>  'VARCHAR',
                  'constraint'      =>   '255',
              ],

              'created_at'  =>  [
                  'type'            =>  'DATETIME',
              ],

              'updated_at'  =>  [
                  'type'            =>  'DATETIME',
              ],
            ]
        );

        $this->forge->addKey( 'id', true );
        $this->forge->createTable( 'users' );
    }

    public function down()
    {
        $this->forge->dropTable( 'users' );
    }
}
