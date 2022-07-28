<?php

// Connect To The Database

include 'php/connection.php';

// Get Order Details

$id = $_REQUEST['id'];

$sql = "SELECT * FROM orders WHERE id = '$id'";
$orders = $conn->query($sql)->fetch_object();

?>
<?php

include 'render-orders.php';


// Use Sessions

session_start();

// Get User's First Name

$first_name = '';

if (isset($_SESSION['user']))
  $first_name = $_SESSION['user'];

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/png" href="img/pole.png" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/update.css">
  <title>client</title>

</head>

<body>

  <ul class="nBar">
    <li id="bar"><a href="about.html">About</a></li>
    <li id="bar" style="float: right"><a href="Dashboards.html">Dashboards</a></li>
    <li id="bar" style="float: right; "><a href="add-order.php">My Orders</a></li>
    <li id="bar" style="float: left; margin-right: 30px; font-size: 20px; "><a href="update-order.php"><img src="img/pole.png" width="15px">STYLE STATION</a></li>
    <?php if (isset($_SESSION['user']))
      echo "<p>Hello, $first_name | <a href='log-out.php' class='log-out'>Log Out</a></p>"; ?>
  </ul>

  <div dir="rtl" class="galery">
    <img src="img/alysa-bajenaru-88IV5AtWjB8-unsplash.jpg" style="border-top-right-radius:10px;">
    <img src="img/element5-digital-QJtyomGCYGw-unsplash.jpg">
    <img src="img/samuel-regan-asante-rHXI_D1yltA-unsplash.jpg" style="border-bottom-right-radius:  10px;">
    
  </div>


  <div class="formContainer">

    <form action="update-order-details.php" method="post">
      <input type="hidden" name="id" value="<?php echo $orders->id ?>">
      <h2>עדכון הזמנה מספר <?php echo $orders->id ?></h2>
      <div class="elem-group">
        <select name="location" id="location" required>
          <option value="בחר מקום">בחר מקום</option>
          <option value="תל אביב">תל אביב</option>
          <option value="רמת גן">רמת גן</option>
        </select>
      </div>
      <div class="elem-group">
        <select name="occupation" id="occupation" required>
          <option value="בחר בעל מקצוע">בחר בעל מקצוע</option>
          <option value="מעצבי שיער">מעצבי שיער</option>
          <option value="קוסמטיקאיות">קוסמטיקאיות</option>
          <option value="פדיקוריסטים">פדיקוריסטים</option>
        </select>
      </div>
      <div>
        <input type="date" name="date" id="date" required>
        <input type="time" name="time" id="time" required>
      </div>
      <input type="text" value="<?php echo $orders->idcard ?>" name="idcard" id="idcard" readonly required>
      <div class="elem-group">
      </div>
      <div>
        <input type="submit" value="עדכן הזמנה">
      </div>
      <div>
        <a href="delete-order.php?id=<?php echo $id ?>" id="delete-link-button">
          <input type="button" value="ביטול הזמנה">
        </a>
      </div>
    </form>

  </div>

  <div class="RoomInfo">
    <div dir="rtl">
      <h1>STYLE STATION <br> מרכז יופי, טיפוח וקוסמטיקה. </h1>
    </div>
    <div dir="rtl">
      <h4>עדכון או ביטול הזמנה</h4>
    </div>
    <div dir="rtl">
      <h4>השירותים שלנו: <br><br> מיטב מעצבי השיער והקוסמטיקאיות.<br> נותני השירות הטובים ביותר נמצאים אצלינו והכול
        במקום אחד.
        <br> אצלנו תקבלו שירות ברמה הגבוהה ביותר ובסביבה הקרובה הנוחה אלייך.
      </h4>
    </div>

  </div>


</body>

<footer>

  <h1 class="h1Footer">STYLE STATION</h1>
  <h3 class="h3Footer">all rights reserved 2022</h3>

</footer>

</html>