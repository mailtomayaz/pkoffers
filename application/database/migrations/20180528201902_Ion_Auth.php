<?php

class Migration_Ion_Auth extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('ion_auth');
    }

    public function down() {
        $this->dbforge->drop_table('ion_auth');
    }

}