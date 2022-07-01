<?php
    header('Access-Control-Allow-Origin: *');

    require("conexao.php");

    $sql = "SELECT * FROM scores ORDER BY score DESC limit 3";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row['name'] . "|" . $row['score'] . "|";
        }
    } else {
        echo "Não há registros";
    }

    $conn->close();
?>