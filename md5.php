<form name="frm" method="POST" action="md5.php">
  Valor: <input type="text" name="txtValor"/>
  <br/><br/>
  <input type="submit" value="Realizar Conversão para MD5">
</form>
<?php
  if(isset($_POST["txtValor"])){
  $string = $_POST["txtValor"];
  echo md5($string);
}
?>