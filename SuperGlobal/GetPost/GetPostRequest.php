<?php
    declare(strict_types=1);

    class Home {
        public function index(): string {
            echo '<pre>';
            var_dump($_REQUEST);
            echo '<pre>';

            echo '<pre>';
            var_dump($_GET);
            echo '<pre>';

            echo '<pre>';
            var_dump($_POST);
            echo '<pre>';

            return '<form action="($_SERVER["PHP_SELF"])" method="post">
            <label>x:</label><br>
            <input type="text" name="x">
            </form>';
        }
    }
?>