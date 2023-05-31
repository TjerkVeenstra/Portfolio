<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
    include 'includes/nav.php';
    include 'includes/bootstrap.inc.php';
    include 'includes/config.inc.php';
    ?>
    
    <form class="loginForm" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
        <h1 class="admin">Admin</h1>
        <input type="password" name="password" placeholder="Admin key">
        <input type="submit" value="submit" name="submit">
    
<?php 
$query = mysqli_query($link, "select * from admin order by id desc;");
$row = mysqli_fetch_array($query, MYSQLI_BOTH);
    if(isset($_POST["submit"])){
        if($_POST["password"] == $row["password"]) header("location: edit.php"); 
        else echo "<h3 class='error'>Wrong key!</h3>"; 
    }
?>
</form>
<?php include 'includes/footer.php'; ?>  
</body>
</html>