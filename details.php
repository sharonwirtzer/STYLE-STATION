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
    <title>Details</title>
    <link rel="stylesheet" href="css/details.css">
</head>

<body>
    <ul class="nBar">
        <li id="bar"><a href="about.html">About</a></li>
        <li id="bar" style="float: right; "><a href="add-order.php">My Orders</a></li>
        <li id="bar" style="float: left; margin-right: 30px; font-size: 20px; "><a href="details.php"><img src="img/pole.png" width="15px">STYLE STATION</a></li>
        <?php if (isset($_SESSION['user']))
            echo "<p>Hello, $first_name | <a href='log-out.php' class='log-out'>Log Out</a></p>"; ?>
    </ul>
    <div class="detailsImg">
        <img src="img/kartzi2.png" style="width: 720px;">
    </div>

    <div class="RoomInfo">

        <main>
            <section>
                <h1>My Orders</h1>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th> כתובת</th>
                                <th> סוג טיפול</th>
                                <th> בתאריך</th>
                                <th> בשעה</th>
                                <th> תעודת זהות</th>
                                <th> מספר הזמנה</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php render_orders() ?>
                        </tbody>
                        <p>לשינוי או ביטול ההזמנה לחץ על מספר ההזמנה</p>
                    </table>
                    <a href="add-order.php">
                        <input class="add_order" type="button" value="➕ New Order">
                    </a>
                </div>
            </section>
        </main>
    </div>
</body>
<footer>

    <h1 class="h1Footer">STYLE STATION</h1>
    <h3 class="h3Footer">all rights reserved 2022</h3>

</footer>

</html>