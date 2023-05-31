<?php

require_once("./includes/config.inc.php");

$query = mysqli_query($link, "select * from cv order by id desc;");
$row = mysqli_fetch_array($query, MYSQLI_BOTH);
if($row != NULL) $languages = explode(',', $row['languages']);
 
if (isset($_POST['submit'])) {
    $languages = implode(", ", $_POST['languages']);
    $filename = $_FILES["filename"]["name"];
    $tempname = $_FILES["filename"]["tmp_name"];
    $folder = "./images/" . $filename;$_FILES["filename"]["name"];

    $name = $_POST["name"];
    $about = $_POST["about"];
    $date = $_POST["date"];
    $url = $_POST["url"];
    if(strlen($about) > 500 || strlen($name) > 15){
        echo '<script>',
            'alert("About is max 500 characters and the name is 15 characters");',
        '</script>';
    }
    else if($name != NULL || $about != NULL){
        $sql = "INSERT INTO cv (name, filename, about, languages, date, url) VALUES ('$name','$filename', '$about', '$languages', '$date', '$url')";
        mysqli_query($link, $sql);   
        move_uploaded_file($tempname, $folder);

        $query = mysqli_query($link, "select * from cv order by id desc;");
        $row = mysqli_fetch_array($query, MYSQLI_BOTH);
        $languages = explode(',', $row['languages']); 
    }else{
        echo '<script>',
            'alert("Please fill in a title and about");',
        '</script>';
    }
}
 
if (isset($_POST['delete'])){
    $id = $_POST['delete'];
    $query = "DELETE FROM cv WHERE id='$id' ";
    $query_run = mysqli_query($link, $query);
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php 
    include 'includes/nav.php';
    include 'includes/bootstrap.inc.php';
?>

    <form id="myForm" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data" onsubmit="return validateForm();">
        <div class="allInputs">
            <div class="rightSide">
                <div class="file">
                    <div class="preview">
                    <img id="previewImg" src="images/no-image.png" alt="Preview Image" />
                    </div>
                    <input type="file" id="selectedFile" class="fileInput" name="filename" accept=".jpg, .jpeg, .png, .jfif, .webp" onchange="previewFile()" style="display: none;">
                    <input type="button" value="Image" onclick="document.getElementById('selectedFile').click();" />
                </div>
                <div class="date">
                    <input type="date" name="date">
                </div>
                <div class="url">
                    <input type="text" name="url" placeholder="Project url">
                </div>
            </div>
            <div class="leftSide">
                <div class="name">
                    <input type="text" class="nameInput" name="name" placeholder="Project Name">
                </div>
                <div class="about">
                    <textarea class="aboutInput" name="about" placeholder="About" maxlength="500" ></textarea>
                </div>
                <div class="languages">
                    <div><label>HTML</label><input type="checkbox" name="languages[]" value="html"></div>
                    <div><label>CSS</label><input type="checkbox" name="languages[]" value="css" ></div>
                    <div><label>JS</label><input type="checkbox" name="languages[]" value="js"></div>
                    <div><label>PHP</label><input type="checkbox" name="languages[]" value="php"></div>
                    <div><label>SQL</label><input type="checkbox" name="languages[]" value="sql"></div>
                    <div><label>C#</label><input type="checkbox" name="languages[]" value="C#"></div>
                </div>
            </div>
        </div>

        <input type="submit" class="submit" name="submit">

    </form>

    <?php 
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
    <form method="post">
        <input type="hidden" name="delete" value="'.$row['id'].'">
        <input type="submit" value="Delete" name="deleteButton" placeholder="delete">
    </form>
    </div>';
    } ?>

   
<?php include 'includes/footer.php'; ?>
</body>
<script>
    function validateForm() {
        var checkboxes = document.getElementsByName("languages[]");
        var isChecked = false;
        
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                isChecked = true;
                break;
            }
        }

        if (!isChecked) {
            alert("Please check at least one box.");
            return false;
        }

        return true;
    }

    function previewFile() {
    var preview = document.querySelector('#previewImg');
    var file    = document.querySelector('input[type=file]').files[0];
    var reader  = new FileReader();

    reader.addEventListener("load", function () {
        preview.src = reader.result;
    }, false);

    if (file) {
        reader.readAsDataURL(file);
    }
}

    
</script>

</html>