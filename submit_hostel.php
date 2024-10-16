<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Update this with your DB username
$password = "Jin@2003"; // Update this with your DB password
$dbname = "hostel_db"; // The name of your database

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $hostel_name = $conn->real_escape_string($_POST['hostel_name']);
    $hostel_registration = $conn->real_escape_string($_POST['hostel_registration']);
    $price = $conn->real_escape_string($_POST['price']);
    $college_name = $conn->real_escape_string($_POST['college_name']);
    $latitude = $conn->real_escape_string($_POST['latitude']);
    $longitude = $conn->real_escape_string($_POST['longitude']);
    $features = $conn->real_escape_string($_POST['features']);
    $facilities = $conn->real_escape_string($_POST['facilities']);

    // Handle file upload
    if (isset($_FILES['hostel_image']) && $_FILES['hostel_image']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['hostel_image'];
        $imageName = uniqid() . "_" . basename($image['name']); // Generate unique name
        $imagePath = 'uploads/' . $imageName;
        move_uploaded_file($image['tmp_name'], $imagePath); // Move the file to a folder
    } else {
        echo "Error uploading image.";
        exit;
    }

    // Insert form data into the database
    $sql = "INSERT INTO hostel_details (hostel_name, hostel_registration, hostel_image, price, college_name, latitude, longitude, features, facilities) 
            VALUES ('$hostel_name', '$hostel_registration', '$imageName', '$price', '$college_name', '$latitude', '$longitude', '$features', '$facilities')";

    if ($conn->query($sql) === TRUE) {
        echo "Hostel details added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
