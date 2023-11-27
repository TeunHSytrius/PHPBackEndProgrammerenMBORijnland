<h3>PHP lab 1.4</h3>
<?php
$naam = "Karim";
$nd = "8.5";
$eng = "7.7";
$rek = "6.7";
$prog = "8.5";
$db = "9.4";

$naam2 = "Sophie";
$nd2 = "8.9";
$eng2 = "8.7";
$rek2 = "9.7";
$prog2 = "9.5";
$db2 = "9.2";

$gemiddeld = $nd + $eng + $rek + $prog + $db;
$gemiddeld2 = $nd2 + $eng2 + $rek2 + $prog2 + $db2;

$sum = $gemiddeld / 5;
$sum2 = $gemiddeld2 / 5;

$afgem = round($sum,2);
$afgem2 = round($sum2,2);



echo "<table border=1>
    <caption>
        <strong>Rapport</strong>
    </caption>
    <thead>
        <tr>
            <th>Naam</th><th>Nederlands</th><th>Engels</th>
            <th>Rekenen</th><th>Programmeren</th>
            <th>Database</th>
            <th>Gemiddeld</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>$naam</td><td>$nd</td><td>$eng</td>
            <td>$rek</td><td>$prog</td>
            <td>$db</td><td>$afgem</td>
        </tr>
        <tr>
            <td>$naam2</td><td>$nd2</td><td>$eng2</td>
            <td>$rek2</td><td>$prog2</td>
            <td>$db2</td><td>$afgem2</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan='6'>Groep gemiddeld</td><td>---------</td>
        </tr>
    </tfoot>
</table>";
?>