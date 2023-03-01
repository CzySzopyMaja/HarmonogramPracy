<html>
<head> 
<title>Tygodniowy Harmonogram Pracy</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="wyglad.css">
</head>
<body>
<div class=div>
  <form action="index.php" method="post">
    <label for="date">Data</label>
    <input type="date" id="date" name="date" />

    <label for="godz_wejscia">Godzina Wejscia</label>
    <input type="time" id="godz_wejscia" name="godz_wejscia" />

    <label for="godz_opuszczenia">Godzina Opuszczenia</label>
    <input type="time" id="godz_opuszczenia" name="godz_opuszczenia" />

    <label for="id_pracownika">ID Pracownika</label>
    <input type="number" id="id_pracownika" name="id_pracownika" />

    <label for="dzial">Dział</label>
    <select id="dzial" name="dzial">
      <option value="sprzedaz">Sprzedaż</option>
      <option value="produkcja">Produkcja</option>
      <option value="IT">IT</option>
      <option value="serwis">Serwis</option>
      <option value="obsluga_klienta">Obsługa klienta</option>
    </select>
  
    <input type="submit" value="Submit" />
  </form>
</div>

</body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tygodniowy_harmonogram_pracy";

// Podłączenie do bazy
$conn = new mysqli($servername, $username, $password, $dbname);
// Check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Pobieranie danych
$date = $_POST['date'];
$godz_wejscia = $_POST['godz_wejscia'];
$godz_opuszczenia = $_POST['godz_opuszczenia'];
$id_pracownika = $_POST['id_pracownika'];
$dzial = $_POST['dzial'];

$sql = "INSERT INTO spis (data, godz_wejscia, godz_opuszczenia, id_pracownika, dzial)
VALUES ('$date', '$godz_wejscia', '$godz_opuszczenia', $id_pracownika, '$dzial')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 

</html>