<html>
<body>
<form method="post" action="calculadora.php">
<input type="text" name="numero1"/>
<input type="text" name="numero2"/>
<INPUT TYPE="submit" VALUE="Enviar">
</form>
<?php
if(isset($_POST['numero1']))
{
$soma = $_POST['numero1'] - $_POST['numero2'];



}

?>

<body>

</html> 

