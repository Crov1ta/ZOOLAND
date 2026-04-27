<?php
define("MYHOST", "localhost/XEPDB1");
define("MYUSER", "system");
define("MYPASS", "Mohelbrh227");

if (!isset($conn)) {
    $conn = oci_connect(MYUSER, MYPASS, MYHOST);
    if (!$conn) {
        $e = oci_error();
        die("Erreur de connexion Oracle : " . htmlspecialchars($e['message']));
    }
}
?>
