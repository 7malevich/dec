<?

error_reporting(E_ALL);


function httpPost($url, $data)
{
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
	// curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}

$url = 'http://172.19.126.223:48080/public/preorder/queues';
$data = array('name' => 'value1', 'age' => 'value2');
httpPost($url, $data);

?>