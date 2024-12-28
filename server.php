<?php
session_start();

// Initializing variables
$username = "";
$email = "";
$errors = array(); 

// Database connection using PDO for enhanced security
try {
    $db = new PDO('mysql:host=localhost;dbname=register;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // Receive all input values from the form
    $username = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password_1 = htmlspecialchars(trim($_POST['password_1']));
    $password_2 = htmlspecialchars(trim($_POST['password_2']));

    // Form validation
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) { 
        array_push($errors, "Valid email is required"); 
    }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 !== $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    // Check if the user already exists
    if (count($errors) == 0) {
        $stmt = $db->prepare("SELECT * FROM userss WHERE username = :username OR email = :email LIMIT 1");
        $stmt->execute(['username' => $username, 'email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if ($user['username'] === $username) {
                array_push($errors, "Username already exists");
            }
            if ($user['email'] === $email) {
                array_push($errors, "Email already exists");
            }
        }
    }

    // Register user if no errors
    if (count($errors) == 0) {
        $password = password_hash($password_1, PASSWORD_DEFAULT);

        $stmt = $db->prepare("INSERT INTO userss (username, email, password) VALUES (:username, :email, :password)");
        if ($stmt->execute(['username' => $username, 'email' => $email, 'password' => $password])) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('Location: index.html');
            exit();
        } else {
            array_push($errors, "Failed to register user. Try again later.");
        }
    }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $stmt = $db->prepare("SELECT * FROM userss WHERE username = :username LIMIT 1");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('Location: index.html');
            exit();
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}
?>
