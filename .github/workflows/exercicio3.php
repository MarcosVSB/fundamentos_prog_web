<?php

$arr = range(-100,-30);


shuffle( $arr );
foreach( $arr AS $each )
{
	echo $each, '<br />';
}
?>