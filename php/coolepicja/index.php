<?php
    $gif = "images/4x-2.gif";
    $png = "images/4x-2.png";
    $jpg = "images/4x-2.jpg";
    $webp = "images/4x-2.webp";

    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}
th, td{
    padding-left: 5px;
    padding-right: 5px;
}
img{
    width: 200px;
}
</style>
<body>
    <table>
        <tr>
            <th>bestand</th>
            <th>grootte(KB)</th>
            <th>breedte</th>
            <th>hoogte</th>
            <th>browserondersteuning</th>
            <th>kleurenruimte</th>
            <th>transparantie support</th>
            <th>animatie support</th>
            <th>compressie</th>
            <th>Image</th>
        </tr>
        <tr>
            <td>Gif</td>
            <td><?php echo round(filesize($gif) / 1024, 1) ?></td>
            <td><?php echo getimagesize($gif)[0] ?></td>
            <td><?php echo getimagesize($gif)[1] ?></td>
            <td>Alle</td>
            <td>256 kleuren</td>
            <td>Ja</td>
            <td>Ja</td>
            <td>lossless</td>
            <td><a href="images/4x-2.gif"><img src="images/4x-2.gif"></a></td>
        </tr>
        <tr>
            <td>png</td>
            <td><?php echo round(filesize($png) / 1024, 1) ?></td>
            <td><?php echo getimagesize($png)[0] ?></td>
            <td><?php echo getimagesize($png)[1] ?></td>
            <td>Alle</td>
            <td>RGBA</td>
            <td>Ja</td>
            <td>Nee</td>
            <td>lossless</td>
            <td><a href="images/4x-2.png"><img src="images/4x-2.png"></a></td>
        </tr>
        <tr>
            <td>jpg</td>
            <td><?php echo round(filesize($jpg) / 1024, 1) ?> </td>
            <td><?php echo getimagesize($jpg)[0] ?></td>
            <td><?php echo getimagesize($jpg)[1] ?></td>
            <td>Alle</td>
            <td>16 miljoen kleuren</td>
            <td>nee</td>
            <td>Nee</td>
            <td>lossy</td>
            <td><a href="images/4x-2.jpg"><img src="images/4x-2.jpg"></a></td>
        </tr>
        <tr>
            <td>webp</td>
            <td><?php echo round(filesize($webp) / 1024, 1) ?> </td>
            <td><?php echo getimagesize($webp)[0] ?></td>
            <td><?php echo getimagesize($webp)[1] ?></td>
            <td>Alle</td>
            <td>RGB</td>
            <td>Ja</td>
            <td>Nee</td>
            <td>lossy and lossless</td>
            <td><a href="images/4x-2.webp"><img src="images/4x-2.webp"></a></td>
        </tr>
      </table>
</body>
</html>