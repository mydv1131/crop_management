<?php
session_start();
require 'db.php'; // Update the filename if necessary

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if user already exists
    $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($check) > 0) {
        $error = "Email already registered.";
    } else {
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['user_id'] = mysqli_insert_id($conn);
            $_SESSION['username'] = $username;
            header("Location: login.php"); // Redirect to login after successful signup
            exit();
        } else {
            $error = "Error during registration.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Farmers.in - Sign Up</title>
<link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
<!-- Bootstrap CDN link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</head>
<style>
/* Add the same styles you had before */
body {
    margin: 0;
    padding: 0;
    min-height: 100dvh;
    width: 100dvw;
    color: whitesmoke;
    font-family: 'Courier New', Courier, monospace;
    background-image: url('assets/background.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    backdrop-filter: blur(5px);
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: space-between;
    position: relative;
    overflow-x: hidden;
    overflow-y: auto;
}

/* QUOTES */
.quotes {
    width: 50%;
    padding: 2rem;
    position: absolute;
    top: 10%;
    left: 5%;
    text-align: center;
}

.quotes h2,
.quotes h4 {
    color: whitesmoke;
    text-shadow: 0px 0px 10px black;
    font-size: 2.5rem;
}

/* MAIN BOX */
.main {
    display: flex;
    flex-direction: column;
    justify-content: center;  
    align-items: center;
    background-color: rgba(0, 0, 0, 0.57);
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
    padding: 1rem;
    width: 30%;
    height: 100%;
    position: absolute;
    top: 0;
    right: 0.5rem;
    box-sizing: border-box;
}

.main form {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    width: 90%;
}

/* LOGO */
.logo {
    position: absolute;
    top: 2rem;
    left: 2rem;
    display: flex;
    align-items: center;
}

/* ✅ Responsive Layout for Mobile */
@media (max-width: 1005px) {
    body {
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        padding: 1rem;
    }

    .logo {
        position: static;
        justify-content: center;
        margin-bottom: 1rem;
    }

    .quotes {
        position: static;
        width: 100%;
        margin-bottom: 1rem;
    }

    .quotes h2,
    .quotes h4 {
        font-size: 1.7qrem;
    }

    .main {
        position: static;
        width: 90%;
        margin-bottom: 2rem;
        height: auto;
    }

    .main form {
        width: 100%;
    }
}
</style>

<body>
<nav class="navbar fixed-top" id="nav">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">
      <img src="assets/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Farmer.in
    </a>
  </div>
</nav>

<!-- quotes of page -->
<div class="quotes">
    <h2>"One platform, Every season"</h2>
    <h4>Farming made simple || Insight made easy</h4>
</div>

<div class="main">
    <h2>Sign Up</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" class="my-3 form-control" required><br><br>
        <input type="email" name="email" placeholder="Email" class="my-3 form-control" required><br><br>
        <input type="password" name="password" placeholder="Password" class="my-3 form-control" required><br><br>
        <button type="submit" class="btn btn-outline-warning ">Register</button>
    </form>
    <p class="my-5 fs-5">Already registered? <a href="login.php">Login here</a></p>
</div>
</body>
</html>
