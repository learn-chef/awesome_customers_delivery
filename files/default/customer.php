<?php
class Customer {
  public $id;
  public $first_name;
  public $last_name;
  public $email;
  public function __construct($id, $first_name, $last_name, $email) {
    $this->id = $id;
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->email = $email;
  }
}
function get_sample_customers() {
  return array(
    new Customer("7561c990-815e-4d45-ad0e-e13e631a807a", "Jane", "Smith", "jane.smith@example.com"),
    new Customer("7cb6b4b6-318a-446d-81b4-95b70bcda560", "Dave", "Richards", "dave.richards@example.com")
  );
}
?>
