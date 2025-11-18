<?php

namespace App\Models;

use CodeIgniter\Model;

class CareerModel extends Model
{
    protected $table      = 'careers';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'description', 'duration_years'];
    protected $useTimestamps = true;

    protected $validationRules = [
        'name' => 'required|min_length[2]|max_length[50]',
        'description' => 'required|min_length[2]|max_length[100]',
        'duration_years' => 'required|integer|greater_than[0]'
    ];

    protected $validationMessages = [
        'name' => [
            'required' => 'El nombre de la carrera es obligatorio',
            'min_length' => 'El nombre debe tener al menos 2 caracteres',
            'max_length' => 'El nombre no puede tener más de 50 caracteres'
        ],
        'description' => [
            'required' => 'La descripción es obligatoria',
            'min_length' => 'La descripcion debe tener al menos 2 caracteres',
            'max_length' => 'La descripción no puede tener más de 100 caracteres'
        ],
        'duration_years' => [
            'required' => 'La duración es obligatoria',
            'integer' => 'La duración debe ser un número entero',
            'greater_than' => 'La duración debe ser mayor que 0'
        ],

    ];

}
