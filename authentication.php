<?php
require_once __DIR__ . '/config/db_connect.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: register.php');
    exit();
}

if (isset($_POST['signUp'])) {
    $firstName = trim($_POST['fname'] ?? '');
    $lastName = trim($_POST['lname'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($firstName === '' || $lastName === '' || $email === '' || $password === '') {
        header('Location: register.php');
        exit();
    }

    $checkStmt = $conn->prepare('SELECT user_id FROM users WHERE email = ? LIMIT 1');
    $checkStmt->bind_param('s', $email);
    $checkStmt->execute();
    $checkStmt->store_result();

    if ($checkStmt->num_rows > 0) {
        $checkStmt->close();
        header('Location: register.php');
        exit();
    }
    $checkStmt->close();

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $insertStmt = $conn->prepare('INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)');
    $insertStmt->bind_param('ssss', $firstName, $lastName, $email, $passwordHash);

    if ($insertStmt->execute()) {
        $insertStmt->close();
        header('Location: register.php');
        exit();
    }

    $insertStmt->close();
    header('Location: register.php');
    exit();
}

if (isset($_POST['signIn'])) {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($email === '' || $password === '') {
        header('Location: register.php');
        exit();
    }

    $selectStmt = $conn->prepare('SELECT user_id, email, password FROM users WHERE email = ? AND status = "active" LIMIT 1');
    $selectStmt->bind_param('s', $email);
    $selectStmt->execute();
    $result = $selectStmt->get_result();
    $user = $result->fetch_assoc();
    $selectStmt->close();

    if ($user) {
        $storedPassword = $user['password'];
        $validPassword = password_verify($password, $storedPassword);

        // Support legacy md5 values and upgrade hash on successful login.
        if (!$validPassword && hash_equals($storedPassword, md5($password))) {
            $validPassword = true;
            $newHash = password_hash($password, PASSWORD_DEFAULT);
            $upgradeStmt = $conn->prepare('UPDATE users SET password = ? WHERE user_id = ?');
            $upgradeStmt->bind_param('si', $newHash, $user['user_id']);
            $upgradeStmt->execute();
            $upgradeStmt->close();
        }

        if ($validPassword) {
            $_SESSION['user_id'] = (int) $user['user_id'];
            $_SESSION['email'] = $user['email'];
            header('Location: index.php');
            exit();
        }
    }

    header('Location: register.php');
    exit();
}

header('Location: register.php');
exit();