<?php
// Database connection details
$servername = "localhost"; // Your DB server
$username = "root"; // Your DB username
$password = "Jin@2003"; // Your DB password
$dbname = "hostel_db"; // Your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if college name is set
if (isset($_POST['college_name'])) {
    $college_name = $conn->real_escape_string(trim($_POST['college_name']));

    // Query to get hostels near the specified college
    $sql = "SELECT * FROM hostel_details WHERE college_name LIKE '%$college_name%'";
    $result = $conn->query($sql);

    // Check if there are results
    if ($result && $result->num_rows > 0) {
        echo '<div class="row">'; // Start of the row for cards
        while ($row = $result->fetch_assoc()) {
            echo '<div class="col-lg-6 col-md-8 mb-4">'; // Adjust the column size for side by side display
            echo '<div class="card border-0 shadow" style="width: 100%; margin: auto;">'; // Use 100% width
            echo '<img src="uploads/' . htmlspecialchars($row['hostel_image']) . '" class="card-img-top" alt="Hostel Image" style="height: 200px; object-fit: cover;">'; // Fixed height for images
            echo '<div class="card-body">';
            echo '<h5 class="card-title">Hostel Name: ' . htmlspecialchars($row['hostel_name']) . '</h5>';
            echo '<h6 class="mb-4">Price: ' . htmlspecialchars($row['price']) . ' per Month</h6>';
            echo '<p class="card-text">Near Colleges: ' . htmlspecialchars($row['college_name']) . '</p>';

            // Dynamically display the features
            echo '<div class="features mb-4">';
            echo '<h6 class="mb-1">Features</h6>';
            $features = explode(',', $row['features']); // Assuming features are stored as a comma-separated string
            foreach ($features as $feature) {
                echo '<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">' . htmlspecialchars(trim($feature)) . '</span>';
            }
            echo '</div>';

            // Dynamically display the facilities
            echo '<div class="facilities mb-4">';
            echo '<h6 class="mb-1">Facilities</h6>';
            $facilities = explode(',', $row['facilities']); // Assuming facilities are stored as a comma-separated string
            foreach ($facilities as $facility) {
                echo '<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">' . htmlspecialchars(trim($facility)) . '</span>';
            }
            echo '</div>';

            echo '<div class="rating mb-4">';
            echo '<h6 class="mb-1">Rating</h6>';
            echo '<span class="badge rounded-pill bg-light">';
            echo '<i class="bi bi-star-fill text-warning"></i>';
            echo '<i class="bi bi-star-fill text-warning"></i>';
            echo '<i class="bi bi-star-fill text-warning"></i>';
            echo '<i class="bi bi-star-fill text-warning"></i>';
            echo '<i class="bi bi-star-fill text-warning"></i>';
            echo '</span>';
            echo '</div>';

            echo '<div class="d-flex justify-content-evenly mb-2">';
            echo '<a href="#" class="btn btn-sm btn-outline-dark shadow-none">Book Now</a>';
            echo '<a href="contact.php?hostel_id=' . htmlspecialchars($row['id']) . '" class="btn btn-sm btn-outline-dark shadow-none">
            More details</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>'; // End of card column
        }
        echo '</div>'; // End of the row for cards
    } else {
        echo "No hostels found for the entered college name.";
    }
} else {
    echo "College name not provided.";
}

// Close the connection
$conn->close();
?>
