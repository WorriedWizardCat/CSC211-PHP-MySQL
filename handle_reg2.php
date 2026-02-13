<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Registration Form</title>
        <style type="text/css" media="screen">
            .error {color: red;}
        </style>
    </head>
    <body>
        <h1>Registration Results</h1>
        <?php
            ini_set("display_errors",0);
            error_reporting(E_ALL);
            
            $okay = true;

            if (empty($_POST["email"])) {
                print "<p class='error'>Please enter your email address.</p>";
                $okay = false;
            }

            if (empty($_POST["password"])) {
                print "<p class='error'>Please enter your password.</p>";
                $okay = false;
            }

            if ($okay) {
                print "<p>You have been successfully registered (but not really)</p>";
            }
        ?>
    </body>
</html>