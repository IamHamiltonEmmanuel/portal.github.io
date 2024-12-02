<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "test";


$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
}
echo "You just successfully created an account with us <br><br>";

$first_name = $_POST["first_name"];
$second_name = $_POST["second_name"];
$email = $_POST["email"];
$street_address = $_POST["street_address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip_code = $_POST["zip_code"];
$country = $_POST["country"];

$sql = "INSERT INTO Customer_Form (first_name, second_name, email, street_address, city, state, zip_code, country) VALUES ('$first_name', '$second_name', '$email', '$street_address', '$city', '$state', '$zip_code', '$country')";


if ($conn->query($sql) === TRUE) {
    echo "We would send you message to your email";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();


?>