<?php
session_start();
require("database.php");
mysqli_query($conn, "CALL Update Weight(10, '')");

?>