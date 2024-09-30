<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public $arrayStudents = [
        ['id' => 1, 'name' => 'Leonardo', 'surname' => 'Di Napoli'],
        ['id' => 2, 'name' => 'Andrea', 'surname' => 'Asaro'],
        ['id' => 3, 'name' => 'Michele', 'surname' => 'Sette'],
        ['id' => 4, 'name' => 'Emanuele', 'surname' => 'Pelliccia'],
        ['id' => 5, 'name' => 'Michele', 'surname' => 'Violante'],
        ['id' => 6, 'name' => 'Claudia', 'surname' => 'Zampini'],
    ];
    public function chiSiamo()
    {
        return view('chiSiamo', ['students' => $this->arrayStudents]);
    }

    public function dettaglio($id)
    {
        foreach ($this->arrayStudents as $student) {
            if ($id == $student['id']) {
                return view('student.detail', ['student' => $student]);
            }
        }
    }
}
