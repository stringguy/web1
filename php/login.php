<?php
session_start();

if (isset($_POST['uname']) && isset($_POST['pass'])) {
    include "../db_conn.php";

    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "uname=" . $uname;

    if (empty($uname)) {
        $em = "User name is required";
        header("Location: ../login.php?error=$em&$data");
        exit;
    } else if (empty($pass)) {
        $em = "Password is required";
        header("Location: ../login.php?error=$em&$data");
        exit;
    } else {

        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$uname]);

        $rowCount = $stmt->rowCount();

        if ($rowCount == 1) {
            $user = $stmt->fetch();

            $username =  $user['username'];
            $password =  $user['password'];
            $fname =  $user['fname'];
            $id =  $user['id'];
            $role = $user['role']; // Assume 'role' is the column in the database

            if ($username === $uname) {
                if (password_verify($pass, $password)) {
                    $_SESSION['id'] = $id;
                    $_SESSION['fname'] = $fname;
                    $_SESSION['role'] = $role; // Store the user's role in the session

                    if ($role == 'admin') {
                        header("Location: ../admin.php"); // Redirect admin to admin dashboard
                    } else {
                        header("Location: ../index.php"); // Redirect regular user to index page
                    }
                    exit;
                } else {
                    $em = "Incorrect User name or password";
                    header("Location: ../login.php?error=$em&$data");
                    exit;
                }
            }
        } elseif ($rowCount > 1) {
            // Multiple users with the same username
            $em = "Multiple users found with the same username. Please contact support.";
            header("Location: ../login.php?error=$em&$data");
            exit;
        } else {
            // No user found with the given username
            $em = "Incorrect User name or password";
            header("Location: ../login.php?error=$em&$data");
            exit;
        }
    }
} else {
    header("Location: ../login.php?error=error");
    exit;
}
?>