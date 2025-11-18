<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table      = 'students';
    protected $primaryKey = 'id';

    protected $allowedFields = ['first_name', 'last_name', 'email', 'career_id', 'student_code'];
    protected $useTimestamps = true;
    protected $beforeInsert = ['generateStudentCode'];

    protected $validationRules = [
        'first_name' => 'required|min_length[2]|max_length[50]',
        'last_name' => 'required|min_length[2]|max_length[50]',
        'email' => 'required|valid_email|is_unique[students.email,id,{id}]',
        'career_id' => 'required|integer'
    ];

    protected $validationMessages = [
        'first_name' => [
            'required' => 'El nombre es obligatorio',
            'min_length' => 'El nombre debe tener al menos 2 caracteres',
            'max_length' => 'El nombre no puede tener más de 50 caracteres'
        ],
        'last_name' => [
            'required' => 'El apellido es obligatorio',
            'min_length' => 'El apellido debe tener al menos 2 caracteres',
            'max_length' => 'El apellido no puede tener más de 50 caracteres'
        ],
        'email' => [
            'required' => 'El email es obligatorio',
            'valid_email' => 'Debe ser un email válido',
            'is_unique' => 'Este email ya está registrado'
        ],
        'career_id' => [
            'required' => 'Debe seleccionar una carrera',
            'integer' => 'Seleccione una carrera válida'
        ]
    ];

    // Método para obtener estudiantes con información de carrera
    public function getStudentsWithCareers()
    {
        return $this->select('students.*, careers.name as career_name')
                    ->join('careers', 'careers.id = students.career_id', 'left')
                    ->findAll();
    }

    // Método para obtener un estudiante con su carrera
    public function getStudentWithCareer($id)
    {
        return $this->select('students.*, careers.name as career_name')
                    ->join('careers', 'careers.id = students.career_id', 'left')
                    ->find($id);
    }

    // Generar código de estudiante automáticamente
    protected function generateStudentCode(array $data)
    {
        if (!isset($data['data']['student_code'])) {
            $year = date('Y');
            $lastStudent = $this->orderBy('id', 'DESC')->first();
            $nextNumber = $lastStudent ? ($lastStudent['id'] + 1) : 1;
            $data['data']['student_code'] = $year . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);
        }
        return $data;
    }
}
