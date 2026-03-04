<DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>No Soup For You!</title>
    </head>
    <body>
        <h1>Mmm... soups</h1>
        <?php
            $soups = [
                "Monday"=> "Clam Chowder",
                "Tuesday"=> "White Chicken Chili",
                "Wednesday"=> "Vegetarian",
                "Thursday"=> "Bouillon Soup",
                "Friday"=> "Pozole Soup"
            ];

            print "<p>$soups</p>";
            print_r($soups);
        ?>
    </body>
</html>