<?php
    session_start();

    $name = $_SESSION['name'] ?? null;
    $alerts = $_SESSION['alerts'] ?? [];
    $active_form = $_SESSION['active_form'] ?? '';

    session_unset();
    
    if($name !== null) {
        $_SESSION['name'] = $name;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS LINK -->
     <link rel="stylesheet" href="./CSS/form.css">

     <!-- FONT AWESOME CDN  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>  
        <!-- Navbar and Logo -->
        <header>
            <a href="" class="logo">Logo</a>

            <nav>
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Collection</a>
                <a href="">Projects</a>
            </nav>

            <div class="user-auth">
                <button type="button" class="login-btn-modal">Login</button>
            </div>

        </header>

        <!-- Alert Box -->
         <?php if(!empty($alerts)){ ?>
            
         <div class="alert-box">
            <?php 
                foreach($alerts as $alert){
            ?>
            <div class="alert <?= $alert['type']; ?> ">
                <i class="<?= $alert['type'] === 'success' ? 'fa-solid fa-circle-check' :  'fa-solid fa-circle-xmark'; ?> "></i>
                <span> <?= $alert['message']; ?> </span>
            </div>
            <?php } ?> <!-- Foreach Close -->
         </div>

         <?php } ?> <!-- Alert Close -->

        <!-- FORM -->
       <div class="auth-model <?= $active_form === 'register' ? 'show slide' : ($active_form === 'login' ? 'show' : '') ?>">

            <!-- Close Icon -->
            <button type="button" class="close-btn-model"><i class="fa-solid fa-circle-xmark"></i></button>

            <!-- Login Form -->
            <div class="form-box login">
                <h2>Login</h2>
                <form action="users_data.php" method="POST">
                    <!-- Email -->
                    <div class="input-box">
                        <input type="email" name="email" placeholder="Email" required>
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                     <!-- Password -->
                    <div class="input-box">
                        <input type="password" name="password" placeholder="Password" required>
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <!-- Login Button -->
                    <button type="submit" name="login_btn" class="btn">Login</button>
                    <!-- Register Button -->
                    <p>Don't Have an Account <a href="" class="register-link">Register</a></p>
                </form>
            </div>

             <!-- Register Form -->
            <div class="form-box register">
                <h2>Register</h2>
                <form action="users_data.php" method="POST">
                    <!-- Name -->
                    <div class="input-box">
                        <input type="text" name="name" placeholder="Name" required>
                        <i class="fa-solid fa-user"></i>
                    </div>
                     <!-- Email -->
                    <div class="input-box">
                        <input type="email" name="email" placeholder="Email" required>
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                     <!-- Password -->
                    <div class="input-box">
                        <input type="password" name="password" placeholder="Password" required>
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <!-- Register Button -->
                    <button type="submit" name="register_btn" class="btn">Register</button>
                    <!-- Login Button -->
                    <p>Already Have an Account <a href="" class="login-link">Login</a></p>
                </form>
            </div>
            
         </div>

         <script src="./JS/form.js"></script>
</body>
</html>