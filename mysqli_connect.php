<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Connect to MySQL</title>
    </head>
    <body>
        <?php
            mysqli_report(MYSQLI_REPORT_OFF);
            if ($dbc = @mysqli_connect("localhost", "root", "m3023299", "myblog")) {
                print "<p>Successfully connected to the database!</p>";
                mysqli_close($dbc);
            } else {
                print "<p style='color: red'>Could not connect to the database:<br>" . mysqli_connect_error() . ".</p>";
            }
        ?>
    </body>
</html>