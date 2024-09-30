<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    private $arrayStudents = [
        ['id' => 1, 'name' => 'Leonardo', 'surname' => 'Di Napoli', 'img' => '/media/1917.jpg'],
        ['id' => 2, 'name' => 'Andrea', 'surname' => 'Asaro', 'img' => '/media/coppola.jpg'],
        ['id' => 3, 'name' => 'Michele', 'surname' => 'Sette', 'img' => '/media/1917.jpg'],
        ['id' => 4, 'name' => 'Emanuele', 'surname' => 'Pelliccia', 'img' => '/media/1917.jpg'],
        ['id' => 5, 'name' => 'Michele', 'surname' => 'Violante', 'img' => '/media/1917.jpg'],
        ['id' => 6, 'name' => 'Claudia', 'surname' => 'Zampini', 'img' => '/media/1917.jpg'],
    ];

    public function homepage()
    {
        $title = 'HACKADEMY 142';
        return view('welcome', ['title' => $title]); //passaggio di dati alla vista
        //chiave dell'array - NOME DELLA VARIABILE SULLA VISTA
        //valore - il dato in sé
    }

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
