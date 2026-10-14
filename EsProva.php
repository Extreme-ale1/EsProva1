<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <font face="Verdana">
        <h1>INSERIMENTO DATI PAESE</h1>     

        <table border="1" width="500">
            <?php
            echo "<tr>";        // IMPORTANTE !!! ---> ;
            echo "<td><b> Paese </b></td>";
            echo "<td>". $_POST["paese"] ."</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td><b> Capitale </b></td>";
            echo "<td>". $_POST["capitale"] ."</td>";   // Le virgolette racchiudono il codice HTML, mentre i punti (.) concatenano le parti HTML con la variabile PHP che contiene il dato ricevuto
            echo "</tr>";
            
            echo "<tr>";
            echo "<td><b> Tipo di governo </b></td>";
            echo "<td>". $_POST["governo"] ."</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td><b> Organizzazioni </b></td>";
            echo "<td>" . implode(", ", $_POST["organizzazioni"]) . "</td>";    // implode() in PHP serve a trasformare un array in una stringa, unendo tutti i suoi elementi con un separatore
            echo "</tr>";

            echo "<tr>";
            echo "<td><b> Descrizione </b></td>";
            echo "<td>". $_POST["descrizione"] ."</td>";
            echo "</tr>";
            

            // SALVATAGGIO NEL RECORD
            $record = $_POST["paese"] . "-" . $_POST["capitale"] . "-" . $_POST["governo"] . "-" . implode(",", $_POST["organizzazioni"]) . "-" . $_POST["descrizione"];

            $fw = fopen("fileDatiPaesi", "a");      // 📂 Apre il file per aggiungere dati alla fine. Da questo momento usiamo $fw per RIFERIRCI al file.
            fwrite($fw, $record . "\n");    // ✍️ Scrive il record nel file e va a capo
            fclose($fw);    // 🔒 Chiude il file dopo la scrittura

            ?>
        </table>
    </font>
</body>
</html>