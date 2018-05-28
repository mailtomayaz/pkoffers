<?php

class Migration_cities extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
             'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
            ),
             'province_id' => array(
                'type' => 'INT',
                'constraint' => 11,
            ), 
            'date_created' => array(
                'type' => 'DATETIME'
            ),
            'date_updated' => array(
                'type' => 'DATETIME'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('cities');
    }

    public function down() {
        $this->dbforge->drop_table('cities');
    }

}