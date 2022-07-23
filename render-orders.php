<?php

function render_orders()
{

    // Connect To The Database

    include 'php/connection.php';

    // Use Sessions

    session_start();

    $user_id = $_SESSION['user_id'];

    $sql = "SELECT id, location, occupation, date, time, idcard FROM orders WHERE user_id = '$user_id'";
    $orders = $conn->query($sql);

    $html = '';


    if ($orders->num_rows == 0) {

        echo "<tr><td colspan='6' class='center'>- אין הזמנות במערכת -</td></tr>";

        return;
    }

    while ($row = $orders->fetch_object()) {

        $html = $html . '<tr>';
        $html = $html . '<td>' . $row->location . '</td>';
        $html = $html . '<td>' . $row->occupation . '</td>';
        $html = $html . '<td>' . $row->date . '</td>';
        $html = $html . '<td>' . $row->time . '</td>';
        $html = $html . '<td>' . $row->idcard . '</td>';
        $html = $html . '<td>';
        $html = $html . '<a href="update-order.php?id=' . $row->id . '" class="">';
        $html = $html . $row->id;
        $html = $html . '</a>';
        $html = $html . '</td>';
        $html = $html . '</tr>';
    }

    echo $html;
}
