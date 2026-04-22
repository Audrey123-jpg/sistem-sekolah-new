<?php
namespace App\Controllers;
require_once '../app/core/Controller.php';
require_once '../app/models/Student.php';

use app\core\Controller;
use app\models\Student;
use App\Models\Students;

class StudentController extends Controller
{

    public function index(): void
    {
        $studentModel = new Students();
        $students = $studentModel->getStudents();

        $this->view('students.index', [
            'students' => $students
        ]);
    }

    public function create(): void
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
        $id = intval($id);

        $studentModel = new Students();
        $student = $studentModel->getStudent($id);
        $this->view('students.edit', [
            'student' => $student
        ]);
    }

    public function store()
    {
        $studentModel = new Students();
        $studentModel->insert($_POST);
    }
    public function update(string $id)
    {
        $id = intval($id);
        $studentModel = new Students();
        $studentModel->update($_POST, $id);
    }
    public function destroy(string $id)
    {
        $id = intval($id);
        $studentModel = new Students();
        $studentModel->delete($id);
    }


}
?>