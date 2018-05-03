<!DOCTYPE html>
<html>
<head>
<style>
div.container{
width:100%;
border:1px solid grey;
}
header, footer {
    padding: 1em;
    color: white;
    background-color: #005266;
    clear: left;
    text-align: center;
}
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;

}
</style>
</head>
<body>
<div class="container">
<header>
<h1>weather monitoring system</h1></header>
<center><div>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "weather";

// Create connection
$conn =mysqli_connect($servername, $username, $password, $dbname);
// Check connection

$sql = "SELECT * from tempandhum";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> temperature: ". $row["temperature"].	"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;humidity: ". $row["humidity"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;time:".$row["time"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 
</div></center>
<footer>Copyright&copy;weather</footer>


</body>
</html>