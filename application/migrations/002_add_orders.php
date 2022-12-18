<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_orders extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'order_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'customer_id' => array(
                                'type' => 'INT',
                                'constraint' => '5',
                        ),
                        'product_name' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '100',
                        ),
                        'quantity' => array(
                            'type' => 'INT',
                            'constraint' => '5',
                        ),
                        'order_date' => array(
                            'type' => 'timestamp',
                        ),
                       
                ));
                $this->dbforge->add_key('order_id', TRUE);
                $this->dbforge->create_table('orders');
        }

        public function down()
        {
                $this->dbforge->drop_table('users');
        }
}