<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Create a Table</title>
    </head>
    <body>
        <?php
            mysqli_report(MYSQLI_REPORT_OFF);

            if ($dbc = @mysqli_connect("localhost", "root", "m3023299", "myblog")) {
                $query = 'CREATE TABLE entries (id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, title VARCHAR(100) NOT NULL, data_entered DATETIME NOT NULL) CHARACTER SET utf8';

                if (@mysqli_query($dbc, $query)) {
                    print "<p>The table has been created.</p>";
                } else {
                    print "<p style='color: red'>Could not create the table because:<br> " . mysqli_error($dbc) . ".</p><p>The query being run was: " . $query . "</p>";
                }
            } else {
                print "<p style='color: red>Could not connect to the database:<br>" . mysqli_connect_error() . ".</p>";
            }
            mysqli_close($dbc);
        ?>
    </body>
</html>