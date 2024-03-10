<?php   
    // declare(strict_types=1);

    class Home {
        public function index(): string {
            return View::make('index', ['foo'=>'bar']);
        }
        public function download() {
            header('Content-Type: application/pdf');
            header("Content-Disposition: attachment;filename='myfile.pdf' ");
            readfile(STORAGE_PATH. '/receipt 6-20-2021.pdf');

        }
        public function upload() {
            $filepath = STORAGE_PATH . '/' . $_FILES['reciept']['name'];
            move_uploaded_file($_FILESS['reciept']['tmp_name'], $filepath);
            header('location: /');
            exit;       # to ensure no code gets executed after redirection
            unlink(STORAGE_PATH. '/receipt 6-20-2021.pdf');     #deletes the file
        }
    }

?>