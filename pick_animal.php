<?php
    require_once('connect.php');

    $sql = "SELECT * FROM animal WHERE id=".$_GET['id'];

    $sql_vac = "SELECT v.nome FROM animal a 
            INNER JOIN animal_vacina av ON a.id = av.id_animal 
            INNER JOIN vacina v ON av.id_vacina = v.id
            WHERE a.id=".$_GET['id'];
    
    $result = $conn->query($sql);
    $result = $result->fetch_assoc();

    $vacinas = $conn->query($sql_vac);
    $vacinas = $vacinas->fetch_all(MYSQLI_ASSOC);

    $result['vacinas'] = $vacinas;

    $conn->close();
?>