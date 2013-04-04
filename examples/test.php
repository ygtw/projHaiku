<?php

		  $handle = fopen("http://140.133.13.43:8080/projfbemo/text/?input=" . '好開心'  , "r");
		  $emotion = stream_get_contents($handle);
		  fclose($handle);
		echo $emotion . ' ';

?>