<?php include 'person.php';?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ostad</title>
        <style>
        .container {
            width: 800px;
            margin: 0 auto;
        }
        </style>
    </head>

    <body>
        <!--
Task 3: Superglobal Variables in PHP
Create a PHP script that retrieves the user's name and email from the HTML form in Task 1 using the $_POST superglobal
variable. Create a new instance of the Person class and use the setName() and setEmail() methods to set the name and
email properties based on the form data. Use the getName() and getEmail() methods to display the properties on the
webpage. -->
        <?php

// Create new Person instance and set properties

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
 $person = new Person();
 // student section
 $setPerson = $_POST['name'];
 $setEmail  = $_POST['email'];

 $person->setName( $setPerson );
 $person->setEmail( $setEmail );

 // Display name and email on webpage
 echo "Name: " . $person->getName() . "<br>";
 echo "Email: " . $person->getEmail();
}
?>

        <div class="container">
            <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="POST">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Input your name here">

                <br> <br>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Input your email here">

                <br> <br>
                <button type="submit">Submit</button>
            </form>
        </div>

    </body>

</html>