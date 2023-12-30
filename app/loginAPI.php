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

$query = "SELECT * FROM delivery_partner";
$result = mysqli_query($conn, $query);

$response = [];

    while($row = mysqli_fetch_assoc($result)) {
        array_push($response, array(
            'partner_id'=>$row["partner_id"],
            'username'=> $row["username"],
            'password'=> $row["password"],
            'rider_name'=> $row["rider_name"],
            'vehicle'=> $row["vehicle"]
            )
        );    
    }

    echo json_encode($response);
    $conn->close();
?>
