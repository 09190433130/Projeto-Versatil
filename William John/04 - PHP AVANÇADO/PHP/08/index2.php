<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Mostrará na tela (ECHO) os valores descritos na pagina anterior (index.php)
echo "Minha cor favorita:  " . $_SESSION["cor"] . ".<br>";
echo "Meu animal favorito " . $_SESSION["animal"] . ".";
?>

</body>
</html>