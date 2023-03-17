<?php

$submit_sent = false;
if (isset($_POST['name']) && $_POST['name'] != '') {

  //if (filter_var($_POST['number'], FILTER_VALIDATE_INT)) {

    //submit the form

    $name = $_POST['name'];
    $number = $_POST['number'];
    $floor = $_POST['floor'];
    $flavour = $_POST['flavour'];
    $when = $_POST['when'];
    $pay = $_POST['pay'];

    $to = "ethan.nicholas.ganz@gmail.com";
    $subject = "";
    $body = "";

    $body .= "Name: " . $name . "\n";

    mail($to, $subject, $body);

    $submit_sent = true;
  //}
}



?>


<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./form.css" media="all" />
  <title>The Choefs</title>
</head>

<body>
  <?php
  if ($submit_sent) :
  ?>
    <h3>Thanks for your order!</h3>
  <?php
  else :
  ?>
    <div class="containter">
      <form class="form" action="index.php" method="POST"><!--post=sent behind the scenes, get=visible, action=where it sends-->
        <div class="form-group">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Ethan" tabindex="1" required />
        </div>
        <div class="form-group">
          <label for="number" class="form-label">Number</label>
          <input type="text" class="form-control" id="number" name="number" placeholder="060 624 4234" tabindex="2" required />
        </div>
        <div class="form-group">
          <label for="floor" class="form-label">Floor and Room</label>
          <input type="text" class="form-control" id="floor" name="floor" placeholder="sb3 324" tabindex="3" required />
        </div>
        <div class="form-group">
          <label for="flavour" class="form-label">Select flavour</label>
          <select class="form-control" id="flavour" name="flavour" tabindex="4" required>
            <option>Lechee Raspberry</option>
            <option>Spearmint</option>
            <option>Ice watermellon</option>
            <option>Freezy Grape</option>
            <option>South Pole</option>
            <option>Polar Mint</option>
            <option>Lemon Zest</option>
            <option>Pink Crystak</option>
          </select>
        </div>
        <div class="form-group">
          <label for="when" class="form-label">Delivery (7:00-22:00)</label>
          <input type="text" class="form-control" id="when" name="when" placeholder="Today at 17:00" tabindex="5" required />
        </div>
        <div class="form-group">
          <label for="pay" class="form-label">Payment method</label>
          <select class="form-control" id="pay" name="pay" tabindex="6" required>
            <option>SnapScan</option>
            <option>Card</option>
            <option>Cash</option>
          </select>
        </div>
        <div>
          <button type="submit" class="btn">Submit</button>
        </div>
      </form>
    </div>
  <?php
  endif;
  ?>
</body>

</html>