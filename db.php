 <?php
$mysqli = new mysqli('sql211.infinityfree.com', 'if0_36329949', 'F4pcAmNx78qOli', 'if0_36329949_car_shop');
// $mysqli = new mysqli('localhost','root', '', 'Cars' );

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//select a database to work with
$mysqli->select_db("if0_36329949_car_shop");
 
?>