<?
error_reporting(E_ALL);
ini_set('display_errors', 1);


$url = 'http://172.19.126.223:48080/public/preorder/queues';
 
$data = http_build_query( array( 'name' => 'value' ) );
 
$options = array(
    'http' => array(
        'header'  => "Content-type: application/json",
        'method'  => 'POST',
        'content' => $data,
    ),
);
 
$context = stream_context_create( $options );
 
$result = file_get_contents( $url, false, $context );
?>
<pre>
	<? var_dump ($result); ?>
</pre>