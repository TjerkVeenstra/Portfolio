<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	<?php include "Style/style.css"; ?>
</style>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<h1 class="Title">BMI calculator</h1>
		<div class="allInputs">
			<div class="inputFields">
				<p>Name:</p> <input type="text" name="name" placeholder="Name">
				<br>
				<p>E-mail:</p> <input type="text" name="email" placeholder="E-mail">
				<br>
				<p>Weight:</p> <input type="number" required step="any" name="Weight"  placeholder="Kilograms (0.5 - 500)">
				<br>
				<p>Lenght:</p> <input type="number" required step="any" name="Length" placeholder="Meters (0.3 - 3)">
				</div>
				<div class="radio" >
				<p>Steve</p> <input type="radio" name="gender" value="male" checked>
				<br>
				<p>Alex</p> <input type="radio" name="gender" value="female">
				<br>
			</div>
			<input type="submit" name="submit">

		</div>
		<?php
require_once("./includes/config.inc.php");
$query = mysqli_query($link, "select * from bmi order by Cat desc;");
while ($row = mysqli_fetch_array($query, MYSQLI_BOTH)) {
	$allBMI[] = $row['Cat'];
}
$light = 0;
$Healthy = 0;
$Heavy = 0;
$obese = 0;
for($i = 0; $i < count($allBMI); $i++){
	if($allBMI[$i] == 0){
		$light++;
	}else if($allBMI[$i] == 1){
		$Healthy++;
	}else if($allBMI[$i] == 2){
		$Heavy++;
	}else{
		$obese++;
	}
}

function Display(){
	$weight = $_POST["Weight"];
	$length = $_POST["Length"];
	$name = $_POST["name"];
	$email = $_POST["email"];

	if($weight == "" || $length == "" || $gender = "" || $weight < 0.5 || $weight > 500 || $length < 0.3 || $length > 3){
		echo "<h1> Invalid input </h1>", "<br>";
		$weight = 60;
		$length = 1.8;
		$gender = "male";
	}else{
		$gender = $_POST["gender"];
		$bmi = round(floatval($weight) / (floatval($length) ** 2), 1);
		echo "<div class='popup'> <div class='hide'><button onclick='Popup()''>X</button> </div>";
		echo " <div class='popTXT'> <p> Your BMI is: ", $bmi , "</p>";

		if($bmi < 18.5){
			echo "<p> You're too light</p> <img src='Gifs/Skeleton.gif'> </div> </div>";
			$cat = 0;
		}else if($bmi < 25){
			echo "<p> You're Healthy </p> <img src='Gifs/witch.gif'> </div> </div>";
			$cat = 1;
		}else if($bmi < 30){
			echo "<p> You're too Heavy </p> <img src='Gifs/biggie.gif'> </div> </div>";
			$cat = 2;
		}else{
			echo "<p> You're obese </p> <img src='Gifs/niko.gif'> </div> </div>";
			$cat = 3;
		}
		require("./includes/config.inc.php");
  		$sql = "INSERT INTO `bmi` (`ID`, `naam`, `email`, `lengte`, `gewicht`, `gender`, `Cat` ) VALUES (NULL, '$name', '$email', '$length', '$weight','$gender', '$cat');";
  		mysqli_query($link, $sql);

	}
}
if(isset($_POST["submit"])){
	Display();
}
echo'<div class="chart">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<canvas id="myChart"></canvas>

<script>
var xValues = ["Too light", "Healthy", "Too Heavy", "obese"];
var yValues = [',$light,', ',$Healthy,', ', $Heavy,',',$obese,']
var barColors = [
  "#281d14",
  "#787777",
  "#433f3f",
  "#f5f5f5"
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
	title: {
      display: true,
      text: "BMI Categorie",
    }
  }
});

</script>

</div>';
?>
</form>
</body>
</html>