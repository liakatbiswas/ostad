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

        <!-- Task 1: HTML Basics Create an HTML form that allows users to input their name and email address. The form should have two fields: one for name and one for email. Use appropriate HTML tags to structure the form. -->

        <div class="container">
            <form action="" method="POST">
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