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
                "Monday"=> "Clam Chowder Soup",
                "Tuesday"=> "White Chicken Chili Soup",
                "Wednesday"=> "Vegetarian Soup",
                "Thursday" => "Bouillon Soup",
                "Friday" => "Pozole Soup",
                "Saturday" => "Cream of Broccoli Soup",
                "Sunday" => "Tomato Soup"
            ];

            foreach ($soups as $day => $soup) {
                print "<p>$day: $soup</p>\n";
            }
        ?>
    </body>
</html>