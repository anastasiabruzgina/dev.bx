<?php

function readFromConsole($result = '')
{
	if ($result ==='')
	{
		$result = trim(fgets(STDIN));
	}
	switch ($result)
	{
		case 'true':
			return true;
		case 'false':
			return false;
		case '!stop':
			return null;
		case is_numeric($result):
			return +$result;
		default:
			return $result;
	}
}