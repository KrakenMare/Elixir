<?php
include 'dbHandler.php';
$servername = 'Arcs Cool Donation Game';
$email = $_GET['email'];
$rank = $_GET['item_number'];
$playername = $_GET['item_number'];
$statement = "UPDATE accounts SET rank='$rank' WHERE name='$playername'";
if ($conn->query($statement) === TRUE) {
    echo "You've been ranked! A recipt will be emailed!";
    mail($email, $subject, $message, $headers);
    $subject = $playername . "'S donation on" . $servername;
    $message = "Thanks for donating and supporting" . $servername . " If you don't have your donation within twelve hours! Contact an Administrator!";
    $headers = 'From: webmaster@example.com' . "\r\n";

} else {
    echo "Error automatically ranking! Contact an Administrator! ";
}

$conn->close();
?>
<h1>Thanks for donating!</h1>
