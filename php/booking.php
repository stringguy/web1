<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include "../db_conn.php";

    // Validate and sanitize input data
    $name = $_POST['name'];
    $mails = $_POST['mails'];
    $timein = $_POST['timein'];
    $timeout = $_POST['timeout'];
    $roomname = $_POST['roomname'];
    $note = $_POST['note'];

    // Perform the booking
    $id = $_SESSION['id'];

    // Do not include $id in the INSERT statement if it's an auto-increment field
    $sql = "INSERT INTO booking (name, mails, timein, timeout, roomname, note) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute([$name, $mails, $timein, $timeout, $roomname, $note]);

    if ($result) {
        // Booking successful
        header("Location: ../index.php");
        exit;
    } else {
        // Booking failed
        $error = "Booking failed. Please try again.";
        header("Location: ../booking.php?error=$error&name=$name&mails=$mails&timein=$timein&timeout=$timeout&roomname=$roomname&note=$note");
        exit;
    }
} else {
    // If the request method is not POST, redirect to the booking form
    header("Location: ../booking.php");
    exit;
}
?>