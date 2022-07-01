<?php
    $conn = mysqli_connect("localhost:3306","com12310","5x5pz9_Y","com12310_Songkhla");
    
    if ($conn->connect_error) {
        die("Error: " . $conn->connect_error);
    }
    echo "Connected successfully";