<?php

class Migration_offers extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
             'province_id' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
               'city_id' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
             'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
            ),
             'description' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
            ),
             'image' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
            ),
             'address' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
            ),
             'phone' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
            ),
            'date_created' => array(
                'type' => 'DATETIME'
            ),
            'date_updated' => array(
                'type' => 'DATETIME'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('offers');
    }

    public function down() {
        $this->dbforge->drop_table('offers');
    }

}