<pre>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//ini_set("log_errors" , "1");
//ini_set("error_log" , "get_headers_errors.log.txt");

/* !!! get_headers перестало работать, обнаружено 02.10.2019 !!! */
echo 'get_headers:<br>';
var_dump(get_headers('https://www.dvec.ru/dalsbyt'));

?>
</pre>