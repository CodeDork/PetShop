<?php include("./includes/header.php");?>
<?php
session_start();
require('./includes/connect_db.php');

// Handle registration
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $first_name = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
    $last_name = mysqli_real_escape_string($dbc, trim($_POST['last_name']));
    $email = mysqli_real_escape_string($dbc, trim($_POST['email']));
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $q = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";
    $r = mysqli_query($dbc, $q);

    if ($r) {
        echo "<p>Registration successful! You can now log in.</p>";
    } else {
        echo "<p>Error: Could not register. Email may already exist.</p>";
    }
}

// Handle login
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $email = mysqli_real_escape_string($dbc, trim($_POST['email']));
    $password = $_POST['password'];

    $q = "SELECT * FROM users WHERE email='$email'";
    $r = mysqli_query($dbc, $q);
    $user = mysqli_fetch_assoc($r);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['first_name'] = $user['first_name'];
        header('Location: petmart_manage.php');
        exit();
    } else {
        echo "<p>Invalid email or password. Please try again.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage PetMart</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Manage PetMart</h1>
    <div style="display: flex; justify-content: space-around;">

        <!-- Registration Section -->
        <div>
            <h2>Register</h2>
            <form action="manage.php" method="POST">
                <label for="first_name">First Name:</label><br>
                <input type="text" id="first_name" name="first_name" required><br>
                <label for="last_name">Last Name:</label><br>
                <input type="text" id="last_name" name="last_name" required><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br><br>
                <input type="submit" name="register" value="Register">
            </form>
        </div>

        <!-- Login Section -->
        <div>
            <h2>Log In</h2>
            <form action="manage.php" method="POST">
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br><br>
                <input type="submit" name="login" value="Log In">
            </form>
        </div>

<div id="sidebar">
								
<a href="petmart.html"><img src="images/discount.jpg" width="300" height="790" alt="Pet Shop" title="Pet Shop"></a> 	
								
								
					    </div>

    </div>
</body>
</html>
