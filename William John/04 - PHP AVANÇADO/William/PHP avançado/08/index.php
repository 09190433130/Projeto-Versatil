<?php

session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php


$_SESSION["cor"] = "verde";
$_SESSION["animal"] = "gato";
echo "A sessão foi iniciada.";
?>

</body>
</html>