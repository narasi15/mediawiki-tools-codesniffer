<?php

/**
 * @param  boolean $a Just for test.
 * @param  boolean $b Just for test.
 * @return void
 */
function wfAOO( $a, $b ) {
	if ( $a )
	{
		# code...
	} elseif ( $b )
	{
	  	# code...
	}
	# too many spaces
	switch ( $b )   {
		case 'value':
			# code...
			break;

		default:
			# code...
			break;
	}
	# between closing parenthesis and opening brace is '\t'
	for ( $i = $a; $i < $b; $i++ )	{
		# code...
	}
}
