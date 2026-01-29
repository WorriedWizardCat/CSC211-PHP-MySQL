<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Your Feedback</title>
    </head>
    <body>
        <?php
            ini_set('display_errors', 1);
			
			$title = $_POST["title"];
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $email = $_POST["email"];
            $response = $_POST["response"];
            $comments = $_POST["comments"];

            print "<p>Thank you, $title $first_name $last_name, for submitting your feedback. You used the following email to submit this feedback: $email</p> 
			<p>You stated that you found this example to be '$response' and added: <br>$comments</p>";
        ?>
    </body>
</html>