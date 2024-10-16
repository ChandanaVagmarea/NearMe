<?php
// Database connection details
$servername = "localhost"; 
$username = "root"; 
$password = "Jin@2003"; 
$dbname = "hostel_db"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if hostel_id is passed in the URL
if (isset($_GET['hostel_id'])) {
    $hostel_id = $conn->real_escape_string($_GET['hostel_id']);

    // Query to get latitude and longitude by hostel_id
    $sql = "SELECT latitude, longitude FROM hostel_details WHERE id = '$hostel_id'";
    $result = $conn->query($sql);

    // Check if the hostel exists
    if ($result && $result->num_rows > 0) {
        $hostel = $result->fetch_assoc();

        // Retrieve latitude and longitude
        $latitude = htmlspecialchars($hostel['latitude']);
        $longitude = htmlspecialchars($hostel['longitude']);
    } else {
        echo "Hostel not found.";
        exit; // Exit if hostel is not found
    }
} else {
    echo "No hostel selected.";
    exit; // Exit if no hostel_id is provided
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Hostel Location</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Leaflet.js CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        #map {
            height: 320px;
            width: 100%;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <center><h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2></center>
        
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded border-0 shadow">
                <!-- Map container -->
                <div id="map"></div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4 border-0 shadow">
                    <h5>Hostel Details</h5>
                    <p><strong>Hostel ID:</strong> <?php echo $hostel_id; ?></p>
                    <p><strong>Longitude:</strong> <?php echo $longitude; ?></p>
                    <p><strong>Latitude:</strong> <?php echo $latitude; ?></p>  
                </div>
            </div>
        </div>
    </div>

    <!-- Leaflet.js JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Initialize the map
        var map = L.map('map').setView([<?php echo $latitude; ?>, <?php echo $longitude; ?>], 14);

        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Add a marker
        L.marker([<?php echo $latitude; ?>, <?php echo $longitude; ?>]).addTo(map)
            .bindPopup('Hostel Location')
            .openPopup();
    </script>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
