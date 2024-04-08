<?php
require_once('db_conn.php');

// Kiểm tra xem đã truyền id qua tham số GET chưa
if(isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Xóa người dùng dựa trên id
    $query = "DELETE FROM users WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $userId, PDO::PARAM_INT);
    $stmt->execute();

    $query = "DELETE FROM booking WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $userId, PDO::PARAM_INT);
    $stmt->execute();

    // Chuyển hướng về trang danh sách người dùng sau khi xóa
    header("Location: usersadmin.php");
    exit;
} else {
    // Hiển thị thông báo nếu không có id được truyền vào
    echo "Invalid request.";
}
?>