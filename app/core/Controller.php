<?php
namespace App\Core;

class Controller
{
    public function view(string $view, array $data = [])
    {
        extract($data);

        // ubah jadi student.index
        $view = str_replace(
            '.', 
            '/', 
            $view
        );
        
        $content = "../app/views/{$view}.php";

        require_once '../app/views/layouts/app.php';
    }
}
?>