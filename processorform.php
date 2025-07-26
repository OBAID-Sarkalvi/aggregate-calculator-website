<html>
<head>
    <title>Processor form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
echo "<h1>I am processing the form at the moment</h2>";

// Debugging line – shows everything received from form
var_dump($_POST);

// Check if form values are received
if (isset($_POST['start']) && isset($_POST['end'])) {
    $name =  $_POST['start'];
    $email =  $_POST['end'];

    

    if (($name == "OBAID" )&&($email=="sarkalvi@gmail.com") ){
       echo "<h1>You have Successfully logged in</h2>";
    } else {
        echo "Wrong Id or Password";
    }
} else {
    echo "I am not processing the forms at the moment (missing inputs)";
}
?>
</body>
</html>
