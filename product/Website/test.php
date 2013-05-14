<?

	$host = "127.0.0.1"; 
	$user = "root"; 
	$pass = ""; 

	$r = mysql_connect($host, $user, $pass);

	if (!$r) {
    	echo "Could not connect to server\n";
	    trigger_error(mysql_error(), E_USER_ERROR);
	} 

	//echo mysql_get_server_info() . "\n"; 

	$query = "SELECT sum(amount) r, sum(cost) x, sum(profit) y, product text, productCategory, year from DewLike.sales group by product, productCategory, year";

	$rs = mysql_query($query);
	
	while ($row = mysql_fetch_assoc($rs)) {
    	$array[] = $row; 
	}
	
	//echo json_encode($array);
	
	mysql_close();

	$array = array(
		array('r'=> rand(10,50), 'x'=> rand(0,400), 'y'=> rand(0,100), 'text'=> 'foo'),
		array('r'=> rand(10,50), 'x'=> rand(0,400), 'y'=> rand(0,100), 'text'=> 'bar'),
		array('r'=> rand(10,50), 'x'=> rand(0,400), 'y'=> rand(0,100), 'text' => 'foo1'),
		array('r'=> rand(10,50), 'x'=> rand(0,400), 'y'=> rand(0,100), 'text' => 'bar1'),
		);
	
	echo json_encode($array);
?>

