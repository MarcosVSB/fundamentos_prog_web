<?php

$arr = range(0,1000);


shuffle( $arr );
foreach( $arr AS $each )
{
	echo $each, '<br />';
}
?>