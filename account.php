<!-- Classes in PHP -->
<?php
class Account {
    // A class has properties (Variables)
    // Access mudifiers (public, private, protected)
    public $account_number = 4256473649901235;
    public $account_name = "John Doe";

    // A class has methods
    public function get_account_number(){
        // A method can access the properties of the class ("->"object access operator)
        echo $this->account_number;
    }
}

    // create an object
    $account = new Account();
?>