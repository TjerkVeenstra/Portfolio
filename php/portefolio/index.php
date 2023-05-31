<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portefolio</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <?php 
    include 'includes/nav.php';
    include 'includes/bootstrap.inc.php';

    require_once("./includes/config.inc.php");

    $query = mysqli_query($link, "select * from cv order by id desc;");
    $row = mysqli_fetch_array($query, MYSQLI_BOTH);
    $months = ["Jan", "Feb", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    $pfquery = $link->query("SELECT * FROM cv ORDER BY id DESC;");

        ?>
    <?php 
    while ($row = $pfquery->fetch_assoc()) {
        if($row["filename"] == ""){
            $row["filename"] = "no-image.png";
        }
        if($row["date"] == ""){
            $date_txt = "<p> No Date </p>";
        }else{
            if($row != NULL) $date = explode("-", $row["date"]);
            $date_txt = '<p class="date_txt">'. $months[intval($date[1]) - 1].' '. $date[2]. '-'. $date[0]. '</p>';
        }
        if($row["url"] == ""){
            $url_txt = "<p> No url </p>";
        }else{
            $url_txt = '<a href="'. $row["url"] . '" class="url_txt">Project Link</a>';
        }
    
        echo '<div class="container">
        <div class="project">
        <div class="leftSide_In">
            <div class="title_In"> <h1>', $row["name"], '</h1> </div>
            <div class="about_In"> <p class="about_txt">', nl2br($row["about"]), '</p> </div>
            <div class="language_In"> <h2>', $row["languages"], '</h2> </div>
        </div>
        <div class="rightSide_In">
            <div class="image_In"> <img id="previewImg" src="./images/', $row["filename"], '"> </div>
            <div class="date_In"> '. $date_txt .' </div>
            <div class="url_In"> '. $url_txt .' </div>
            
        </div>
    </div>
    </div>';
    } ?>

<?php include 'includes/footer.php'; ?>
</body>
</html>

