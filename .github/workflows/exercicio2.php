<?php

$arr = range(-30,100);


shuffle( $arr );
foreach( $arr AS $each )
{
	echo $each, '<br />';
}
?>