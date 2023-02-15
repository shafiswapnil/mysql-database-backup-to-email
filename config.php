<?php

/**
 * Configuration for database_back.php file
 */

define("DB_USER", '');
define("DB_PASSWORD", '');
define("DB_NAME", '');
define("DB_HOST", '');
define("BACKUP_DIR", 'database-backup-files');
define("TABLES", '*');

/* *** DON'T CHANGE *** */
define("CHARSET", 'utf8');
define("GZIP_BACKUP_FILE", true);
define("DISABLE_FOREIGN_KEY_CHECKS", true);
define("BATCH_SIZE", 1000);


/**
 * Configuration for mail.php file
 */

define("SENDER", '');
define("SENDER_TITLE", '');
define("RECIPIENT", '');
define("RECIPIENT_TITLE", '');

?>