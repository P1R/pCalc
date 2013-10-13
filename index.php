<html>
<head><title>calculadora</title></head>
<body>
<h1> calculadora </h1>
<form action="index.php" method="post">
uno:<input type="text" name="uno" value="<?php echo htmlentities($acum); ?>"/>
dos:<input type="text" name="dos" />
<br>
operacion:
<select name="operacion">
	<option value="+">suma</option>
	<option value="-">resta</option>
	<option value="/">divide</option>
	<option value="*">multiplica</option>
	<option value="r">raizdeluno</option>
</select>
<br>
<input type="submit" value="calcular" name="submit">
</form>
<?php
function calcula(){
$a = $_POST['uno'];
$b = $_POST['dos'];
$oper = $_POST['operacion'];
$acum = 0.0;
switch($oper){
	case '+':
		$acum=$a+$b;
		echo("resultado:<input type='text' name='resultado' value='".$acum."'>");
		break;
	case '-':
		$acum=$a-$b;
		echo("resultado:<input type='text' name='resultado' value='".$acum."'>");
		break;
	case '*':
		$acum=$a*$b;
		echo("resultado:<input type='text' name='resultado' value='".$acum."'>");
		break;
	case '/':
		$acum=$a/$b;
		echo("resultado:<input type='text' name='resultado' value='".$acum."'>");
		break;
	case 'r':
		$acum=sqrt($a);
		echo("resultado:<input type='text' name='resultado' value='".$acum."'>");
		break;
}
//header("location:calculadora.html");
}
if(isset($_POST['submit'])){
calcula();
}
?>
</body>
</html>
