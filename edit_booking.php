<?php
require_once('db_conn.php');

// Kiểm tra xem có tham số id được truyền vào không
if (isset($_GET['id'])) {
    $bookingId = $_GET['id'];

    // Truy vấn để lấy thông tin đặt phòng theo id
    $query = "SELECT * FROM booking WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $bookingId, PDO::PARAM_INT);
    $stmt->execute();

    // Kiểm tra xem có dữ liệu đặt phòng hay không
    if ($stmt->rowCount() > 0) {
        $booking = $stmt->fetch(PDO::FETCH_ASSOC);

        // Hiển thị form chỉnh sửa
        ?>
        <body>
            <form action="edit_booking.php" method="post">
                <input type="hidden" name="booking_id" value="<?php echo $booking['id']; ?>">
                <label for="roomname">Room Name:</label>
                <input type="text" id="roomname" name="roomname" value="<?php echo $booking['roomname']; ?>" required>
                <label for="name">username:</label>
                <input type="text" id="name" name="name" value="<?php echo $booking['name']; ?>" required>
                <label for="note">Note:</label>
                <input type="text" id="note" name="note" value="<?php echo $booking['note']; ?>" required>

                <label for="timein">Check-in Time:</label>
                <input type="datetime-local" id="timein" name="timein" value="<?php echo date('Y-m-d\TH:i', strtotime($booking['timein'])); ?>" required>

                <label for="timeout">Check-out Time:</label>
                <input type="datetime-local" id="timeout" name="timeout" value="<?php echo date('Y-m-d\TH:i', strtotime($booking['timeout'])); ?>" required>

                <label for="mails">Emails:</label>
                <input type="text" id="mails" name="mails" value="<?php echo $booking['mails']; ?>" required>

                <!-- Thêm các trường thông tin khác nếu cần -->
                <button type="submit">Update Booking</button>
            </form>
        </body>
        <?php
    } else {
        echo "Booking not found.";
    }
} else {
    echo "Invalid request.";
}

// Kiểm tra xem form đã được submit chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $bookingId = $_POST['booking_id'];
    $newRoomName = $_POST['roomname'];
    $newNote = $_POST['note'];
    $newTimeIn = $_POST['timein'];
    $newTimeOut = $_POST['timeout'];
    $newMails = $_POST['mails'];

    // Cập nhật thông tin đặt phòng trong cơ sở dữ liệu
    $query = "UPDATE booking SET name= :name, roomname = :roomname, note = :note, timein = :timein, timeout = :timeout, mails = :mails WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $bookingId, PDO::PARAM_INT);
    $stmt->bindParam(':name', $bookingId, PDO::PARAM_STR);
    $stmt->bindParam(':roomname', $newRoomName, PDO::PARAM_STR);
    $stmt->bindParam(':note', $newNote, PDO::PARAM_STR);
    $stmt->bindParam(':timein', $newTimeIn, PDO::PARAM_STR);
    $stmt->bindParam(':timeout', $newTimeOut, PDO::PARAM_STR);
    $stmt->bindParam(':mails', $newMails, PDO::PARAM_STR);
    $stmt->execute();

    // Chuyển hướng về trang danh sách đặt phòng sau khi cập nhật
    header("Location: bookingadmin.php");
    exit;
}
?>