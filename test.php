<?php
require_once 'src/config/constants.php';
require_once 'src/config/database.php';

echo SITE_NAME;
echo "<br>";
$conn = getDBConnection();
echo "Database connected!";