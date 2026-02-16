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
                "Wednesday"=> "Vegetarian Soup"
            ];
            
            $count1 = count($soups);
            print "<p>The soups array originally had $count1 elements.</p>";

            $soups["Thursday"] = "Bouillon Soup";
            $soups["Friday"] = "Pozole Soup";
            $soups["Saturday"] = "Cream of Broccoli Soup";
            $soups["Sunday"] = "Tomato Soup";
            
            $count2 = count($soups);
            print "<p>After adding 3 more soups the array now has $count2 elements.</p>";

            print_r($soups);
        ?>
    </body>
</html>