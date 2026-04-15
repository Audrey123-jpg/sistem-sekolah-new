<?php
namespace app\controllers;
require_once '../app/core/Controller.php';
require_once '../app/models/Student.php';

use App\Core\Controller;
use App\Models\Students;
use Student;
class StudentController extends Controller
{
    public function index()
    {
        $studentModel = new Students();
        $students = $studentModel->getStudents();
        $this->view('students.index', [
            'students' => $students
        ]);
    }

    public function create()
    {
        $this->view('students.create');
    }

    public function show(string $id)
    {
        $id = intval($id);
        $studentModel = new Students();
        $student = $studentModel->getStudent($id);
        $this->view('students.show', [
            'student' => $student
        ]);
    }

    public function edit(string $id)
    {
        $this->view('students.edit');
    }
}

?>