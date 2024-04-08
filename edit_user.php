<?php
require_once('db_conn.php');

// Kiểm tra xem có tham số id được truyền vào không
if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Truy vấn để lấy thông tin người dùng theo id
    $query = "SELECT * FROM users WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $userId, PDO::PARAM_INT);
    $stmt->execute();

    // Kiểm tra xem có dữ liệu người dùng hay không
    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Hiển thị form chỉnh sửa
        ?>
        <body>
            <form action="edit_user.php" method="post">
                <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                <label for="fname">First Name:</label>
                <input type="text" id="fname" name="fname" value="<?php echo $user['fname']; ?>" required>
                <!-- Thêm các trường thông tin khác nếu cần -->
                <button type="submit">Update User</button>
            </form>
        </body>
        <?php
    } else {
        echo "User not found.";
    }
} else {
    echo "Invalid request.";
}

// Kiểm tra xem form đã được submit chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $userId = $_POST['user_id'];
    $newFirstName = $_POST['fname'];
    //Thêm các trường thông tin khác nếu cần

    // Cập nhật thông tin người dùng trong cơ sở dữ liệu
    $query = "UPDATE users SET fname = :fname WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $userId, PDO::PARAM_INT);
    $stmt->bindParam(':fname', $newFirstName, PDO::PARAM_STR);
    $stmt->execute();

    // Chuyển hướng về trang danh sách người dùng sau khi cập nhật
    header("Location: usersadmin.php");
    exit;
}
?>