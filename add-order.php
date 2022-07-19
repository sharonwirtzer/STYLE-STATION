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
<html dir="rtl">

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
        <li id="bar" style="float: left; margin-right: 30px; font-size: 20px; "><a href="add-order.php">STYLE STATION<img src="img/pole.png" width="15px"></a></li>
        <?php if (isset($_SESSION['FirstName']))
            echo "<p>Hello, $first_name | <a href='log-out.php' class='log-out'>Log Out</a></p>"; ?>
    </ul>

    <div class="galery">
        <img src="img/6.jpeg" style="border-top-right-radius:   10px;">
        <img src="img/shutterstock_716104408-768x512.jpeg">
        <img src="img/9.jpeg" style="border-bottom-right-radius:  10px;">
      </div>


  <div class="formContainer">

  <form action="process-form.php" method="post">
      <h2>הזמנה חדשה</h2>
      <div class="elem-group">
        <select  name="location" id="location" required>
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
        <input type="date" name="date" id="date"  required>
        <input type="time" name="time" id="time"  required>
      </div>
      <input type="text" placeholder="הכנס תעודת זהות" name="idcard" id="idcard" required>
      <div class="elem-group">
      </div>
      <button type="submit">שלח</button>
      <h2>לצפייה בהזמנות שלי</h2>
      <button onclick="window.location.href='details.php';">לחץ כאן</button>
    </form>

  </div>

  <div class="RoomInfo">
    <div dir="rtl">
      <h1>STYLE STATION <br> מרכז יופי, טיפוח וקוסמטיקה. </h1>
    </div>
    <div dir="rtl">
      <h4>מה המקום מציע<br><br> STYLE STATION מציעה ללקוחותיה מגוון רחב של טיפולי יופי שכל אחד ואחד מהם הוא חוויה.
        שירות ומקצועיות ברמות הגבוהות ביותר.<br>
        אנו מזמינים אתכם לבוא ולהתנסות באחד הטיפולים שלנו - זאת לא תהיה הפעה האחרונה, בהתחייבות!</h4>
    </div>
    <div dir="rtl">
      <h4>השירותים שלנו: <br><br> מיטב מעצבי השיער והקוסמטיקאיות.<br> נותני השירות הטובים ביותר נמצאים אצלינו והכול
        במקום אחד.
        <br> אצלנו תקבלו שירות ברמה הגבוהה ביותר ובסביבה הקרובה הנוחה אלייך.
      </h4>
    </div>
    <div dir="rtl">
      <h4>שירותים נוספים<br><br>
        <ul class="iconList">
          <li> <img src="img/wifi.png" class="icons">אינטרנט אלחוטי</li><br>
          <li><img src="img/kitchen.png" class="icons">מטבחון </li><br>
          <li> <img src="img/wash.png" class="icons">שירות כביסה </li><br>
        </ul>
        <ul class="iconList">

          <li> <img src="img/car.png" class="icons">חניה ללא תשלום </li><br>
          <li> <img src="img/paw.png" class="icons">מותר להכניס חיות מחמד </li><br>
          <li> <img src="img/tv.png" class="icons">טלוויזיה חכמה</li><br>
        </ul>
      </h4>
    </div>

    <div dir="rtl">
      <h4>דברים שחשוב לדעת<br><br>
        <img src="img/no-smoking.png" class="icons">העישון אסור<br><br>
        <img src="img/clock.png" class="icons">שעות עבודה מ - 09:00 עד 22:00
    </div>
    </div>
  </div>

</body>


<footer>

  <h1 class="h1Footer">STYLE STATION</h1>
  <h3 class="h3Footer">all rights reserved 2022</h3>

</footer>

</html>