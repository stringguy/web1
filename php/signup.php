<?php
if (isset($_POST['fname']) && isset($_POST['uname']) && isset($_POST['pass'])) {
    include "../db_conn.php";

    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "fname=" . $fname . "&uname=" . $uname;

    if (empty($fname)) {
        $em = "Full name is required";
        header("Location: ../loginindex.php?error=$em&$data");
        exit;
    } else if (empty($uname)) {
        $em = "User name is required";
        header("Location: ../loginindex.php?error=$em&$data");
        exit;
    } else if (empty($pass)) {
        $em = "Password is required";
        header("Location: ../loginindex.php?error=$em&$data");
        exit;
    } else {
        // hashing the password
        $pass = password_hash($pass, PASSWORD_DEFAULT);

        // Check if the username already exists
        $checkUsername = "SELECT * FROM users WHERE username = ?";
        $stmtCheck = $conn->prepare($checkUsername);
        $stmtCheck->execute([$uname]);

        if ($stmtCheck->rowCount() > 0) {
            // Username already exists, handle accordingly
            $em = "Username already exists. Please choose a different username.";
            header("Location: ../loginindex.php?error=$em&$data");
            exit;
        }

        // Insert new user into the database
        $sql = "INSERT INTO users (fname, username, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$fname, $uname, $pass]);

        header("Location: ../loginindex.php?success=Your account has been created successfully");
        exit;
    }
} else {
    header("Location: ../loginindex.php?error=error");
    exit;
}
?>