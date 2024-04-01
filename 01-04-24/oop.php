<?php
    class User {
        public $name;
        public $email;
        public $password;

        public function __construct($name, $email, $password) {
            $this->name  = $name;
            $this->email  = $email;
            $this->password  = $password;
        }

        function set_name($name) {
            $this->name  = $name;
        }
        function get_name() {
            return $this->name;
        }
        
    }
    $user1  = new User('wunmi', 'wunmiobe@gmail.com', 'aygi7');
    echo $user1->email . '<br>';
   

    class Employee extends User {
        public $title;
        public function __construct($name, $email, $password, $title)
        {
            parent::__construct($name, $email, $password);
            $this->title   = $title;
        }
        public function set_title($title) {
            $this->title    = $title;
        }
        public function get_title() {
            return $this->title;
        }
    }
    $staff  = new Employee('Sarah', 'sarahdsau@gmail.com', 'ayd', 'Manager');
    echo $staff->get_title();
?>