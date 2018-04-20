<?php
session_start();
include_once 'db.php';
$uid=$_SESSION['username'];
echo $uid;
$sql = "SELECT firstN FROM users WHERE user_id ='$uid'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        
        echo $row['firstN'];
    }
} else {
    echo "0 results";
}
mysqli_close($conn);

?>
