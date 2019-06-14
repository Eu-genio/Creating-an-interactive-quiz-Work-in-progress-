<?php
$username = mysqli_real_escape_string($conn, $_POST['uid']);
$password = mysqli_real_escape_string($conn, $_POST['pwd']);
mysqli_query($conn,"INSERT INTO hiragana (username, password) VALUES ('".$username."','".$password."'");
?>