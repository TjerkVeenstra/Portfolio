<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Jansma/Styles/Stylesheet.css">  
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Document</title>
    <script src="/Jansma/JavaScript/test.js"></script>
</head>
<body>
    <?php 
    include 'includes/Header.php';
    include 'includes/Menu.php';
    ?>   
    <section>
        <table>
            <tr>
                <th>Dienst</th>
                <th>Beschrijving</th>
                <th>Prijs vanaf</th>
            </tr>
            <tr>
                <td>Telefoonreparatie</td>
                <td>Schermreparatie, herinstallatie</td>
                <td>€25</td>
            </tr>
            <tr>
                <td>Herinstallatie Windows</td>
                <td>Schone installatie, backup van uw oude gegevens</td>
                <td>€50</td>
            </tr>
            <tr>
                <td>Installatie SSD</td>
                <td>Uw computer of laptop upgraden met een snelle Solid State Drive</td>
                <td>€75</td>
            </tr>
            <tr>
                <td>Aanleg thuisnetwerk</td>
                <td>Bekabeling, router, accesspoints voor dekkende WiFi</td>
                <td>op aanvraag</td>
            </tr>
            <tr>
                <td>Televisiemontage</td>
                <td>Ophangen, monteren van uw televisie op locatie</td>
                <td>€50</td>
            </tr>
        </table>
    </section> 
    <?php include  'includes/Footer.php'; ?>
</body>
</html>


