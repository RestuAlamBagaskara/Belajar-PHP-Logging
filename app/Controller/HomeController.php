<?php

    namespace Alambagaskara\BelajarPhpMvc\Controller;

    use Alambagaskara\BelajarPhpMvc\App\View;

    class HomeController {

        public function index(): void { 
            $model = [
                'title' => 'Belajar PHP MVC',
                'content' => "Selamat Belajar PHP MVC"
            ];
            
            View::render('Home/index', $model);
        }

        public function hello(): void { 
            echo "HomeController.hello()";
        }

        public function world(): void { 
            echo "HomeController.world()";
        }

        public function about(): void { 
            echo "Nama Saya Alam";
        }

        function login():void {
            $request = [
                "username" => $_POST['username'],
                "password" => $_POST['password']
            ];

            $user = [

            ];

            $response = [
                'message' => 'Login sukses'
            ];

            //Kirim Response ke View
        }
    }