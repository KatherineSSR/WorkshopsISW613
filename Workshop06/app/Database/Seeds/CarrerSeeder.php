<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CareerSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'Ingeniería del Software', 'description' => 'Estudio de metodologías y técnicas para el desarrollo de software', 'duration_years' => 4]
        ];

        $this->db->table('careers')->insertBatch($data);
    }
}
