<!-- <?php
// File: login.php

// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "course";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari formulir login
$email = $_POST['loginEmail'];
$password = $_POST['loginPassword'];

if (empty($email) && empty($password)) {
    echo "<script>alert('Harap masukkan email dan password'); window.location.href = 'formlogin.html';</script>";
} elseif (empty($email)) {
    echo "<script>alert('Harap masukkan email'); window.location.href = 'formlogin.html';</script>";
} elseif (empty($password)) {
    echo "<script>alert('Harap masukkan password'); window.location.href = 'formlogin.html';</script>";
} else {
// Lakukan verifikasi
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Verifikasi password
    if (password_verify($password, $row['password'])) {
        // Login berhasil, lanjutkan sesuai kebutuhan
        echo "Login berhasil!";
        header("Location: index.html");
    } else {
        echo "Password salah";
    }
} else {
    echo "Email tidak ditemukan";
}
}
$conn->close();
?> -->

<?php
// File: login.php

// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "course";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari formulir login
$email = $_POST['loginEmail'];
$password = $_POST['loginPassword'];

if (empty($email) && empty($password)) {
    echo "<script>alert('Harap masukkan email dan password'); window.location.href = 'formlogin.html';</script>";
} elseif (empty($email)) {
    echo "<script>alert('Harap masukkan email'); window.location.href = 'formlogin.html';</script>";
} elseif (empty($password)) {
    echo "<script>alert('Harap masukkan password'); window.location.href = 'formlogin.html';</script>";
} else {
// Lakukan verifikasi
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Verifikasi password
    if (password_verify($password, $row['password'])) {
        // Login berhasil, set sesi
        session_start();
        $_SESSION['user_email'] = $email;
        header("Location: index.php");
    } else {
        echo "Password salah";
    }
} else {
    echo "Email tidak ditemukan";
}
}
$conn->close();
?>
