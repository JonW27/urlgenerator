<?php
	    $pro = $_POST['writ'];
	    echo $pro;
	    function gen() {
	    global $vt;
           $vt = 0;
	    for ($x = 0; $x <= 10; $x++) {
	    	$v = rand( 0 , 9 );
            $vt = $vt*10 + $v;
	    }
	    }
	    gen();
	    $file = 'http://php-dyncontent.rhcloud.com/' . $vt . '.txt';
		$file_headers = @get_headers($file);
		if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
    		$exists = false;
    		$tamale = strval($vt);
    		$gfs = fopen("{$vt}.txt", "w");
    		fwrite($gfs, $pro);
    		echo "Your page is @ $file";
    		echo "<script>window.location = '" . $tamale . ".txt';</script>";
		}
		else {
    		$exists = true;
    		gen();
		}
?>
