<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        Naam: <input type="text" name="naam" placeholder="naam">
        <br>
        Email: <input type="text" name="email" placeholder="email">
        <br>
		Tafel:  <input type="number" step="any" name="tafel"  placeholder="0-100">
		<br>
		Aantal: <input type="number" step="any" name="aantal" placeholder="0-100(optioneel)">
        <br>
		<input type="submit" name="submit">
	</form>
</body>
</html>

<?php 
if(isset($_POST["submit"])){
    Display();
}

function Display(){
    $tafel = $_POST["tafel"];
    $aantal = $_POST["aantal"];
    if($tafel < 0 || $tafel > 100 || $aantal < 0 || $aantal > 100){
        echo"<h1> Ongeldige input </h1>";
    }else{
        if($tafel == ""){
            echo"De tafel is niet ingevuld";
        }else{
            echo"<h1> De Tafel van ", $tafel, "</h1>"; 
            if($aantal == ""){
                for($i = 0; $i < 101; $i++){
                    echo $tafel, " x ", $i, " = ", $tafel * $i, "<br>";
                }
            }else{
                for($i = 0; $i < $aantal + 1; $i++){
                    echo $tafel, " x ", $i, " = ", $tafel * $i, "<br>";
                }
            }
        }
    }

    
}
?>