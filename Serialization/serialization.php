<?php

    class Serialization {

        public string $id;
        public function __construct(
            public float $amount,
            public string $description,
            public float $creditCardNumber,
        ) {
            $this->id = uniqid('Invoice');
        }
        ///Serialize Magic methods

        /*__sleep magic method is called before serialization happens. It is used to hook up to preserialization event to 
            perform some clean up where the actual property to be serialized is specified.
            It contains an array of the properties to be serialized.
        */
        public function __sleep():array { 
            return ['id', 'amount'];
        }



        /*__wakeup magic method is called after serialization happens. 
        It is used to restore connnections/resources/dependencies 
        when objects are unserialized (that may have been lost during serailization).
        */
        public function __wakeup():void {}
        

        /*__serialize magic method is called before serialization happens. 
            It contains an array representing the actual object.
        */
        public function __serialize():array {
            return [
                'id' => $this->id,
                'amount' => $this->amount,
                'description' => $this->description,
                'creditCardNumber' => base64_encode($this->creditCardNumber),
                'foo' => 'bar'
            ];
        }


        /*__unserialize magic method is called after serialization happens. 
            It gets the data that was serialized as the argument.
            It enables restoring state of an object using that data.
        */
        
        public function __unserialize(array $data):void {var_dump($data);}


    // $invoice = new Invioce();r

    // echo serialize(true);
    // echo serialize(1);
    // echo serialize(2.5);
    // echo serialize('hello world');
    // echo serialize([1,2,3]);
    // echo var_dump(unserialize(['a'=>1, 'b'=>2]));

    };
?>