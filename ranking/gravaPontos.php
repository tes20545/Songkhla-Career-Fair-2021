<?php
    header('Access-Control-Allow-Origin: *');
    date_default_timezone_set('Asia/Bangkok');

    require("conexao.php");
    $s = $_GET['s'];
    $n = $_GET['n'];
    $p = $_GET['p'];
    $timestamp = date("Y-m-d H:i:s");
    $sql = "INSERT INTO scores (name, score, phone,save) VALUES ('$n','$s', '$p','$timestamp')";

    mysqli_query($conn,"SET NAMES utf8");

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  Header("Location: ../game.php?score=".$s);
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
