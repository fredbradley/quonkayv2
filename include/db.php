<?php
if ($local) {
        define('DB_HOST', 'localhost');
        define('DB_USER', 'root');
        define('DB_PASSWORD', 'Ach1lle5');
        define('DB_DATABASE', 'simplysofas');
} else {
	define('DB_HOST', '');
	define('DB_USER', '');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', '');
}

?>
