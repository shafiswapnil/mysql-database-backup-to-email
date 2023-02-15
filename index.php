<?php
// No caching
header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');
?>

<div id="backup_db"></div>
<div id="get_the_file"></div>
<div id="mail"></div>


<!-- jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>


<script>
$(document).ready( function() { 
    setTimeout(function() { 
        $('#backup_db').load('database_backup.php'); 
    }, 100);
	setTimeout(function() { 
        $('#get_the_file').load('get_the_file.php'); 
    }, 786);
	setTimeout(function() { 
        $('#mail').load('mail.php'); 
    }, 800);
});
</script>