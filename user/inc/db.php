<?php 

define("HOST", "localhost");
define("USERNAME", "gieovjfx_lincom");
define("PASSWORD", "1Lone2wolf@");
define("DBNAME", "gieovjfx_gg");

$link = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);


// define("HOST", "localhost");
// define("USERNAME", "root");
// define("PASSWORD", "");
// define("DBNAME", "beyond");

// $link = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);


$no_plan = "Select Investment Plan";
$sql = "UPDATE `users` SET `plan`='STANDARD' WHERE plan = '' OR plan = '$no_plan'";
$query = mysqli_query($link, $sql);

// if ($query) {
// 	echo "<script>alert('DB Query Successful');</script>";
// }
