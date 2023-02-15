<?php

// No caching
header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

// get files under database-backup-files directory
$files = glob('database-backup-files/*.gz');

// exit if no directory or file found
if ( !$files ) {
// 	exit('There is no file named database-backup-files or no sql file exists.');
}

foreach ($files as $file) {
	extract(pathinfo($file));
	$file = "{$dirname}/{$filename}.{$extension}";
}

?>