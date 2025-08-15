<?php

$conn=mysqli_connect("localhost","root","","register") or die(mysql_error());

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['city_id'])) { 
    $city_id = $_POST['city_id'];
    $sql = "SELECT vid, vname FROM venue WHERE idlo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $city_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $venues = array(); 
    while ($row = $result->fetch_assoc()) {
        $venues[] = $row;
    }
    
    echo json_encode($venues);
    exit;
}

$cities = array();
$sql = "SELECT lid, lname FROM location";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $cities[] = $row;
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/">
    <title>RAKT</title>
</head>
<body>
    <div id="main">
        <div id="header">
            <h1>Welcome To Navigation Portal For Blood!</h1>
        </div>
        <div id="content">
            <form method="">
                <label for="name">Name:</label>
                <input type="text" required>

                <label for="bloodtype">Blood-Type:</label>
                <select name="bloodtype" id="bloodtype" class="bt">
                    <option value="">SELECT</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select><br>

                <label>City: </label>
                <select id="city">
                    <option value="">Select City</option>
                    <?php foreach ($cities as $city): ?>
                        <option value="<?php echo $city['lid']; ?>"><?php echo $city['lname']; ?></option>
                    <?php endforeach; ?>
                </select>
                <br><br>
                <label>Location:</label>
                <select id="location">
                    <option value=""></option>
                </select>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('city').addEventListener('change', function() {
            var cityId = this.value;
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (this.status == 200) {
                    var locations = JSON.parse(this.responseText);
                    var locationSelect = document.getElementById('location');
                    locationSelect.innerHTML = '<option value="">Select Location</option>';
                    locations.forEach(function(location) {
                        locationSelect.innerHTML += '<option value="' + location.vid + '">' + location.vname + '</option>';
                    });
                }
            };
            xhr.send('city_id=' + cityId);
        });
    </script>
</body>
</html>

