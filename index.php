<html>
<head> 
<title>Tygodniowy Harmonogram Pracy</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="wyglad.css">
</head>
<body>
<div>
<form action="index.php" method="post">
    
    <label for="data">Data</label>
    <input type="date" id="date" name="data" />

    <label for="godz_wejscia">Czas Wejścia</label>
    <input type="Time" id="godz_wejscia" name="godz_wejscia" />

    <label for="godz_opuszczenia">Czas Opuszczenia</label>
    <input type="Time" id="" name="godz_opuszczenia" />

    <label for="id_pracownika">ID Pracownika</label>
    <input type="number"id="id_pracownika" name="id_pracownika"/>


    <label for="dzial">Dział</label>
        <option Value="Sprzedaż">Sprzedaż</option>
        <option Value="IT">IT</option>
        <option Value="Produkcja">Produkcja</option>
        <option Value="Serwis">Serwis</option>
        <option Value="Obsługa Klienta">Obsługa Klienta</option>
    </select>

    <input type="submit" value="Submit" />
</form>
</div>
</body>
<?php
$username="localhost";
$servername= "root";
$password="";
$dbname = "tygodniowy_harmonogram_pracy";

//połączenie
$conn = new mysqli($servername, $username, $password, $dbname);

//check
if ($conn->connect_error){
    die("Connection Failed ". $conn->connect_error);
}


//pobieranie danych
$date = $_POST['date']
$godz_wejscia = $_POST['godz_wejscia'];
$godz_opuszczenia = $_POST['godz_opuszczenia'];
$id_pracownika = $_POST['id_pracownika'];
$dzial = $_POST['dzial'];
?>
</html>