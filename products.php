<html>
<head>

    <script src="https://cdn.jsdelivr.net/semantic-ui/2.2.9/semantic.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.9/semantic.min.css">
<title>Products</title>
</head>
<body>
<?php
$successLink = 'http://localhost/AutoPaymentExilir/success.php';
$cancelLink = 'http://localhost/AutoPaymentExilir/cancel.php';
$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypalID = 'arcanuo123-facilitator@gmail.com'; //Business Email
?>
<center>
  <div class="ui card">

    <div class="content">
      <a class="header">Donator Rank</a>
      <div class="meta">
        <span class="date">$10 USD</span>
      </div>
      <div class="description">
        This donator rank comes with a fancy name color so you can show your support of the server! Also includes updated drop loots and more and more goodies!
      </div>
    </div>
    <div class="extra content">
      <a>
        <i class="user icon"></i>
        The Donator Rank!
      </a>
    </div>
</div>


<form action="<?php echo $paypalURL; ?>" method="post">
    <!-- Identify your business so that you can collect the payments. -->

    <input type="hidden" name="business" value="<?php echo $paypalID; ?>">
    <div class="ui input">

    <input type="text" name="playername" id="playername" placeholder="Arcanuo"><br />
    <input type="email" name="email" id="email" placeholder="South@park.ca"><br />
  </div><br />
    <!-- Specify a Buy Now button. -->
    <input type="hidden" name="cmd" value="_xclick">


    <input type="hidden" name="item_name" value="RandomDonatorRank">
    <input type="hidden" name="item_number" value="1"> <!--Set the value what the rank will be in the DB -->
    <input type="hidden" name="amount" value="10.00">
    <input type="hidden" name="currency_code" value="USD">


    <input type='hidden' name='cancel_return' value='<?php echo $successLink; ?>'>
    <input type='hidden' name='return' value='<?php echo $successLink; ?>'>
    <!--Get the Username, Damnit Guys! -->


    <!-- Display the payment button. -->

    <input type="image" name="submit" border="0"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
    <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
</form>

</center>
</body>
