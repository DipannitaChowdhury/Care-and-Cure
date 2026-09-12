<?php

$conn = mysqli_connect("localhost", "root", "", "care_and_cure");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $location = $_POST["location"];
    $ambulance_type = $_POST["ambulance_type"];
    $emergency = $_POST["emergency"];

    $sql = "INSERT INTO ambulance_request
            (name, location, ambulance_type, emergency)
            VALUES
            ('$name', '$location', '$ambulance_type', '$emergency')";

    if (mysqli_query($conn, $sql)) {
        $message = "Ambulance request submitted successfully!";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Smart Ambulance Request | Care and Cure</title>

<style>

body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f4faf8;
    color: #183638;
}

.container {
    width: 90%;
    max-width: 550px;
    margin: 70px auto;
}

.card {
    background: white;
    padding: 35px;
    border-radius: 25px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
}

h1 {
    color: #147c78;
    margin-bottom: 10px;
}

.subtitle {
    color: #718187;
    font-size: 14px;
    margin-bottom: 30px;
}

label {
    display: block;
    margin-top: 18px;
    margin-bottom: 7px;
    font-size: 14px;
    font-weight: bold;
}

input,
select {
    width: 100%;
    padding: 13px;
    border: 1px solid #d8e9e6;
    border-radius: 10px;
    box-sizing: border-box;
    font-size: 14px;
}

button {
    width: 100%;
    margin-top: 25px;
    padding: 14px;
    border: none;
    border-radius: 12px;
    background: #2a9d8f;
    color: white;
    font-size: 15px;
    font-weight: bold;
    cursor: pointer;
}

button:hover {
    background: #147c78;
}

.message {
    margin-top: 20px;
    color: #147c78;
    font-weight: bold;
}

.back {
    display: inline-block;
    margin-top: 20px;
    color: #147c78;
    text-decoration: none;
    font-size: 14px;
}

</style>

</head>

<body>

<div class="container">

<div class="card">

<h1>🚑 Smart Ambulance Request</h1>

<p class="subtitle">
Request ambulance support quickly when urgent transport is needed.
</p>

<form method="POST">

<label>Your Name</label>

<input type="text" name="name" required>

<label>Your Location</label>

<input type="text"
name="location"
placeholder="Enter your current location"
required>

<label>Ambulance Type</label>

<select name="ambulance_type" required>

<option value="">Select type</option>
<option value="Emergency Ambulance">Emergency Ambulance</option>
<option value="Patient Transport">Patient Transport</option>
<option value="Wheelchair Accessible">Wheelchair Accessible</option>

</select>

<label>Emergency Level</label>

<select name="emergency" required>

<option value="">Select level</option>
<option value="High">High</option>
<option value="Medium">Medium</option>
<option value="Low">Low</option>

</select>

<button type="submit">
Request Ambulance →
</button>

</form>

<?php if ($message != "") { ?>

<div class="message">
<?php echo $message; ?>
</div>

<?php } ?>

<a href="index.html" class="back">
← Back to Care and Cure
</a>

</div>

</div>

</body>

</html>
