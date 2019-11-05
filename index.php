<?php 

    ## Basic Class ##

        // // Class for customer object
        // class Customer{

        //     // Declaring variables (you may assign default values if you wish)
        //     public $id;
        //     public $name;
        //     public $email;
        //     public $balance;

        //     // Method, which is basically a function
        //     public function getCustomer($id){

        //         $this->id = $id;
        //         return 'John Hammond';

        //     }

        // }

        // // Instantiates a new customer
        // $customer = new Customer;

        // echo $customer->getCustomer(1); // Outputs 'John Hammond'

    ## Class With Constructor ##

        // // Class for customer object
        // class Customer{

        //     // Declaring variables in private (only accessed in this class)
        //     private $id;
        //     private $name;
        //     private $email;
        //     private $balance;

        //     // Constructor to be used
        //     public function __construct($id, $name, $email, $balance){

        //         $this->id = $id;
        //         $this->name = $name;
        //         $this->email = $email;
        //         $this->balance = $balance;
                
        //     }

        //     // Function for getting email
        //     public function getEmail(){

        //         return $this->email;

        //     }

        // }

        // // Instantiates a new customer
        // $customer = new Customer(1, 'John Hammond', 'jHammond@ingen.com', 0);

        // // echo $customer->name(); // Outputs error because you can not directly access a private variable
        // // echo $customer->getEmail(); // Outputs 'jHammond@ingen.com'

    ## Class With Inheritance ##

        // // Class for customer object
        // class Customer{

        //     // Declaring variables in protected (only accessed by classes extending the Customer class)
        //     private $id;
        //     private $name;
        //     protected $email;
        //     private $balance;

        //     // Constructor to be used
        //     public function __construct($id, $name, $email, $balance){

        //         $this->id = $id;
        //         $this->name = $name;
        //         $this->email = $email;
        //         $this->balance = $balance;
                
        //     }

        //     // Function for getting email
        //     // Can be used in either Customer or Subscriber class
        //     // public function getEmail(){

        //     //     return $this->email;

        //     // }

        // }

        // // Subscriber class that inherits from the Customer class
        // class Subscriber extends Customer{

        //     // New variable only used for subscribers
        //     public $plan;

        //     // Constructor to be used
        //     public function __construct($id, $name, $email, $balance, $plan){

        //         // Inherits the variables from the Customer class
        //         parent::__construct($id, $name, $email, $balance);
        //         // New variable for subscribers
        //         $this->plan = $plan;
                
        //     }

        //     // Function for getting email
        //     // Can be used in either Customer or Subscriber class
        //     public function getEmail(){

        //         return $this->email;

        //     }

        // }

        // // Instantiates a new subscriber
        // $subscriber = new Subscriber(1, 'John Hammond', 'jHammond@ingen.com', 0, 'Jurassic');

        // echo $subscriber->getEmail(); // Outputs 'jHammond@ingen.com'

    ## Abstract Class ##

        // Class for customer object
        // abstract class Customer{

        //     // Declaring variables in protected (only accessed by classes extending the Customer class)
        //     private $id;
        //     private $name;
        //     protected $email;
        //     private $balance;

        //     // Constructor to be used
        //     public function __construct($id, $name, $email, $balance){

        //         $this->id = $id;
        //         $this->name = $name;
        //         $this->email = $email;
        //         $this->balance = $balance;
                
        //     }

        //     // Abstract method for getting email
        //     // Can only be used in an abstract class
        //     abstract public function getEmail();

        // }

        // // Subscriber class that inherits from the Customer class
        // class Subscriber extends Customer{

        //     // New variable only used for subscribers
        //     public $plan;

        //     // Constructor to be used
        //     public function __construct($id, $name, $email, $balance, $plan){

        //         // Inherits the variables from the Customer class
        //         parent::__construct($id, $name, $email, $balance);
        //         // New variable for subscribers
        //         $this->plan = $plan;
                
        //     }

        //     public function getEmail(){

        //         return $this->email;

        //     }

        // }

        // // Instantiates a new subscriber
        // $subscriber = new Subscriber(1, 'John Hammond', 'jHammond@ingen.com', 0, 'Jurassic');

        // echo $subscriber->getEmail(); // Outputs 'jHammond@ingen.com'

    ## Static Props & Method ##

        // User class
        class User {

            public $username;
            public $password;
            public static $passwordLength = 6; // Static declaration because it password length should always be the same

            // Static method for finding the value of $passwordLength
            public static function getPasswordLength(){

                return self::$passwordLength;

            }

        }

        echo User::getPasswordLength(); // Outputs '5'

?>