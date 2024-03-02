<?php
    class Transit {
        public function __construct(){
            $this->id = uniqueId('invoice');
        }
        public function process() {
            return new static();
        }
        public function __clone(){              #__clone() is used to modify any parameter in the cloned object
            $this->id = uniqueId('invoice');
        }
    }

?>