<?php
class Person {
/**
 * Task 2: Basic OOP in PHP

 * Create a PHP class called "Person" with the following properties and methods:
 * Properties:
 * Name
 * Email

 * setName($name): sets the name property
 * setEmail($email): sets the email property
 * getName(): returns the name property
 * getEmail(): returns the email property

 * Create an instance of the Person class and set the name and email properties. Use the getName() and getEmail() methods
 * to display the properties on the webpage.
 */

 private $name;
 private $email;

 public function setName( $name ) {
  $this->name = $name;
 }

 public function setEmail( $email ) {
  $this->email = $email;
 }

 public function getName() {
  return $this->name;
 }

 public function getEmail() {
  return $this->email;
 }
}

// Create new Person instance and set properties
$person = new Person();
$person->setName( "Liakat" );
$person->setEmail( "liakat@gmail.com" );

// Display name and email on webpage
echo "Name: " . $person->getName() . "<br>";
echo "Email: " . $person->getEmail();

echo "<br><br><br>";

$person->setName( "Nafi" );
$person->setEmail( "nafi@gmail.com" );

// Display name and email on webpage
echo "Name: " . $person->getName() . "<br>";
echo "Email: " . $person->getEmail();