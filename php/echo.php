<?php
/*
override_function('echo', '', 'for($i = 0; $i < func_num_args(); $i++) {print '\''. func_get_arg($i). '\''."</br>" ;}');

function echo()
{
    for($i = 0; $i < func_num_args(); $i++) {       
		echo '\''. func_get_arg($i). '\''."</br>" ;		
    }
}

echo();
echo('bla');
echo('foo', 'bar', 'baz');*/

function abc() {
	
    for($i = 0; $i < func_num_args(); $i++) {       
		print '\''. func_get_arg($i). '\''."</br>" ;		
    }
}

abc();
abc('bla');
abc('foo', 'bar', 'baz', 'test');

?>
