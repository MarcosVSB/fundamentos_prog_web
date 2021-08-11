<?php

$arr = range(1,50);


shuffle( $arr );
foreach( $arr AS $each )
{
	echo $each, '<br />';
}
?>