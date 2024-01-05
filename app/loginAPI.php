<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "u952592082_logistics";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT username, password FROM delivery_partner WHERE username = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $dbUsername, $hashPassword);

    if (mysqli_stmt_fetch($stmt)) {
        if (password_verify($password, $hashPassword)) {
            $response = array('status' => 'success', 'message' => 'Login successful!', 'username' => $dbUsername);
        } else {
            $response = array('status' => 'error', 'message' => 'Invalid password');
        }
    } else {
        $response = array('status' => 'error', 'message' => 'Invalid username');
    }

    mysqli_stmt_close($stmt);
} else {
    $response = array('status' => 'error', 'message' => 'Invalid request method');
}

// Output the response as JSON
echo json_encode($response);

mysqli_close($conn);
?>
