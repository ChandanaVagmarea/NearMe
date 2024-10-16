<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Owner - Add Hostel Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-top: 30px;
            color: #333;
        }
        form {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-size: 18px;
            margin-bottom: 10px;
            display: block;
            color: #333;
        }
        input[type="text"],
        input[type="number"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        textarea {
            resize: vertical;
        }
        .submit-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1>Add Your Hostel Details</h1>
    <form action="submit_hostel.php" method="POST" enctype="multipart/form-data">
        <!-- Hostel Name -->
        <label for="hostel_name">Hostel Name:</label>
        <input type="text" id="hostel_name" name="hostel_name" required>
        <!-- Hostel Registration number-->
        <label for="hostel_registration">Hostel Registration number(legally):</label>
        <input type="text" id="hostel_registration" name="hostel_registration" required>
        <!-- Hostel Room Image -->
        <label for="hostel_image">Hostel Room Image:</label>
        <input type="file" id="hostel_image" name="hostel_image" accept="image/*" required>

        <!-- Price -->
        <label for="price">Price (in INR):</label>
        <input type="number" id="price" name="price" required>

        <!-- Near College Name -->
        <label for="college_name">Near College Name (required):</label>
        <input type="text" id="college_name" name="college_name" required>

        <!-- Latitude -->
        <label for="latitude">Latitude:</label>
        <input type="text" id="latitude" name="latitude" placeholder="Enter latitude (e.g., 28.7041)" required>

        <!-- Longitude -->
        <label for="longitude">Longitude:</label>
        <input type="text" id="longitude" name="longitude" placeholder="Enter longitude (e.g., 77.1025)" required>

        <!-- Features -->
        <label for="features">Features (e.g., AC, WiFi, etc.):</label>
        <textarea id="features" name="features" rows="4" placeholder="List of features..."></textarea>

        <!-- Facilities -->
        <label for="facilities">Facilities (e.g., laundry, kitchen, etc.):</label>
        <textarea id="facilities" name="facilities" rows="4" placeholder="List of facilities..."></textarea>

        <button type="submit" class="submit-btn">Submit</button>
    </form>

</body>
</html>
