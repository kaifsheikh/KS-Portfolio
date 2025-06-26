<?php 

// Session Start here
session_start();
require_once './config.php';

if(isset($_POST['register_btn'])){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = password_hash(trim($_POST['password']) , PASSWORD_DEFAULT);

    // Email Validation
   $check_email = mysqli_query($conn , "SELECT Email FROM users WHERE Email = '$email'");
   if(mysqli_num_rows($check_email) > 0){
        $_SESSION['alerts'][] = [
            'type' => 'error',
            'message' => "Email is Already Registered"
        ];

        $_SESSION['active_form'] = 'register';
   
    }else {
        mysqli_query($conn , "INSERT INTO users (Name , Email , Password) VALUES ('$name' , '$email' , '$password')");
        $_SESSION['alerts'][] = [
            'type' => 'success',
            'message' => "Registration Successful"
        ];

        $_SESSION['active_form'] = 'login';
    }

    header('Location: index.php');
    exit();
}

// Registration Code
if (isset($_POST['register_btn'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);

    $check_email = mysqli_query($conn, "SELECT Email FROM users WHERE Email = '$email'");
    if (mysqli_num_rows($check_email) > 0) {
        $_SESSION['alerts'][] = [
            'type' => 'error',
            'message' => "Email is Already Registered"
        ];
        $_SESSION['active_form'] = 'register';
    } else {
        mysqli_query($conn, "INSERT INTO users (Name, Email, Password) VALUES ('$name', '$email', '$password')");
        $_SESSION['alerts'][] = [
            'type' => 'success',
            'message' => "Registration Successful"
        ];
        $_SESSION['active_form'] = 'login';
    }

    header('Location: index.php');
    exit();
}

// Login Code
if (isset($_POST['login_btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE Email = '$email'");
    $users = ($result->num_rows > 0) ? $result->fetch_assoc() : null;

    if ($users && password_verify($password, $users['Password'])) {
        $_SESSION['name'] = $users['Name'];
        $_SESSION['alerts'][] = [
            'type' => 'success',
            'message' => "Login Successful"
        ];

        header('Location: portfolio.php');
        exit();
    } else {
        $_SESSION['alerts'][] = [
            'type' => 'error',
            'message' => "Incorrect Email or Password"
        ];
        $_SESSION['active_form'] = 'login';
        header('Location: index.php');
        exit();
    }
}

?>