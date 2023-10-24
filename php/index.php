<?php
$conn = new mysqli("localhost", "root", "", "escritorio");


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


$id_advogado = $_POST['id_advogado'];
$sql = "SELECT * FROM processos WHERE advogado_id = $id_advogado";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID do Processo: " . $row["numero_processo"]. " - Cliente: " . $row["cliente_id"]. "<br>";
    }
} else {
    echo "Nenhum resultado encontrado";
}


$conn->close();
?>
