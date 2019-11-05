<!DOCTYPE html>
<html>
<body>
<h1>НГУЕН ТХАНЬ АН ИУ4-11</h1><br>
<h1>task 2<h1><br>
<?php
	echo '<table>';
	for($i=1,$i<=100,i++){
		echo "<tr>";
		for($j=1,$j<=100,j++){
			echo "<td>";
		}
	}
	echo '</table border=1 cellspacing=0>';
?>

<h1>task 2<h1><br>
<form action "index.php" method="post">
a: <input type="text" name="vara" placeholder="fill a"><br>
b: <input type="text" name="varb" placeholder="fill b" ><br>
result : <select name ="result">
			<option value="1">sum</option>
			<option value="2">dif</option>
			<option value="3">dev</option>
			<option value="4">mul</option>
		</select>
<input type="submit" value ="ok">
</form>
<?php
function sum($a,$b){
		$c = $a+$b;
		return $c;
	}
	function dif($a,$b){
		$c = $a-$b;
		return $c;
	}
	function dev($a,$b){
		$c = $a/$b;
		return $c;
	}
	function mul($a,$b){
		$c = $a*$b;
		return $c;
	}
	if(isset($_POST["vara"])){
		$a=$_POST["vara"];
	}else{
		echo "fill a";
	}
	if(isset($_POST["varb"])){
		$b=$_POST["varb"];
	}else{
		echo "fill b";
	}
	$x=$_POST["result"];
	switch ($x) {
    case 1:
       echo"a+b= ".sum($a,$b)."<br>";
       break;
    case 2:
       echo"a-b= ".dif($a,$b)."<br>";
        break;
	case 3:
       echo"a/b= ".dev($a,$b)."<br>";
        break;
    default:
        echo"a*b= ".mul($a,$b)."<br>";
        break;
}
?>
</body>
</html>
