<?php 

setcookie("token", "", time() - 3600, "/", "", true, true);

header("Location: /AnArchyClinical-Laboratory/patients/patients")

?>