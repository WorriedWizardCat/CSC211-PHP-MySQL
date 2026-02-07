<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Manipulating Strings</title>
    </head>
    <body>
        <?php
            $name = "Michael Godel";
            $string = "Hello World";
            $statement = "PHP is not fun!";

            echo "<p>Before strtok(): $name<br></p>";
            echo "After strtok(): ";
            echo $first = strtok($name, ' '); // Finds everything before the space in the variable and then prints it

            echo "<p><br>Before substr(): $string<br></p>";
            echo "After: substr(): ";
            echo $sub = substr($string, 0, 8); // Creates a new substring of only the characters you select for instance 0-8

            echo "<p>Before str_ireplace(): $statement<br></p>";
            echo "After str_ireplace: ";
            echo $statement = str_ireplace("not","", $statement); // Searches for 'not' and removes it in the statement variable
        ?>
    </body>
</html>