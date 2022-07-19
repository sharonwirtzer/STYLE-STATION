<?php

// Connect To The Database

include 'php/connection.php';

// Get Movie Details

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
  <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/details.css">
  <title>client</title>

</head>

<body>

  <ul class="nBar">
    <li id="bar"><a href="about.html">About</a></li>
    <li id="bar" style="float: right; "><a href="add-order.php">My Orders</a></li>
    <li id="bar" style="float: left; margin-right: 30px; font-size: 20px; "><a href="update-order.php"><img src="img/pole.png" width="15px">STYLE STATION</a></li>
    <?php if (isset($_SESSION['user']))
      echo "<p>Hello, $first_name | <a href='log-out.php' class='log-out'>Log Out</a></p>"; ?>
  </ul>

  <div dir="rtl" class="galery">
    <img src="img/4.jpeg" style="border-top-right-radius:10px;">
    <img src="img/8.jpeg">
    <img src="img/istockphoto-1271712634-170667a.jpeg" style="border-bottom-right-radius:  10px;">
  </div>


  <div class="formContainer">

    <form action="update-order-details.php" method="post">
    <input type="hidden" name="id" value="<?php echo $orders->id ?>">
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
      <div >
        <input type="submit" value="Update order">
      </div>
      <div >
        <a href="delete-order.php?id=<?php echo $id ?>" id="delete-link-button">
          <input type="button" value="Delete order">
        </a>
      </div>
    </form>

  </div>

</body>

</html>