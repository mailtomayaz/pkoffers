<?php

class CategorySeeder extends Seeder {

    private $table = 'categories';

    public function run() {
        $this->db->truncate($this->table);

        //seed records manually
    
     //   $this->db->insert($this->table, $data);

        //seed many records using faker
        $limit = 13;
        echo "seeding $limit user accounts";

        for ($i = 0; $i < $limit; $i++) {
            echo ".";

              $data = [
        
            
            'name' => $this->faker->unique()->word,
             'description' => $this->faker->unique()->word,
         'image' => 'cat.jpg',
             'date_created' => $this->faker->date($format = 'Y-m-d'),
             'date_updated' => $this->faker->date($format = 'Y-m-d'),
            
        ];

            $this->db->insert($this->table, $data);
        }

        echo PHP_EOL;
    }
}
