<?php
include 'dbHandler.php';
$servername = 'Arcs Cool Donation Game';
$subject = $playername . "'S donation on" . $servername;
$message = "Thanks for donating and supporting" . $servername . " If you don't have your donation within twelve hours! Contact an Administrator!";
$headers = 'From: webmaster@example.com' . "\r\n";
$email = $_GET['email'];
$rank = $_GET['item_number']; // The itemnumber from the thing.
$playername = $_GET['playername'];
$statement = "UPDATE accounts SET rank='$rank' WHERE name='$playername'";
if ($conn->query($statement) === TRUE) {
    echo "You've been ranked! A recipt will be emailed!";
    echo $email;
    //mail($email, $subject, $message, $headers);


} else {
    echo "Error automatically ranking! Contact an Administrator! ";
}

$conn->close();
?>
<h1>Thanks for donating!</h1>
