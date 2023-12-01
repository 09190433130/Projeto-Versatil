<?php
// inicia a sessão e grava nas variaveis( cor e animal)
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Seta as variaveis pelas super variaveis $_SESSSION
$_SESSION["cor"] = "verde";
$_SESSION["animal"] = "gato";
echo "A sessão foi iniciada.";
?>

</body>
</html>