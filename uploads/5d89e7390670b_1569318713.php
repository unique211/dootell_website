 <?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "bookline";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM city_data";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
	{
//data get here to user pass json formate
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
   
	}
} else {

    echo "0 results";
	
}

http_response_code(200);
header("Content-type:application/json"); 
echo json_encode($row);
mysqli_close($conn);
?> 