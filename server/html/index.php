<!DOCTYPE html>
<html>
<body>

<h1>Website funcionando!</h1>

<p>Pelo servidor 1</p>

<form action="index.php" method="POST">
Titulo: <input type="text" name="titulo"><br>
<textarea name="texto" rows="5" cols="28"></textarea><br>
<input type="submit">
</form>
<hr>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$titulo = $_POST['titulo'];
$texto = $_POST['texto'];

$servername = "db.ctuqbxteczua.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "fatecjean";
$database = "db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['titulo']) && isset($_POST['texto'])){
        $sql = "INSERT INTO posts (titulo, texto) VALUES ('".$titulo."', '".$texto."')";
        if(mysqli_query($conn, $sql)){

        } else {
                echo "ERROR: $sql" . mysqli_error($conn);
        }
}

$sql = "SELECT id, titulo, texto FROM posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"]. " - Topico: " . $row["titulo"]. "<br>" . $row["texto"] . "<hr>";
 }
}
$conn->close();
?>

</body>
</html>
