<?php

function readFromConsole($result)
{
	switch ($result)
	{
		case 'true':
			return true;
		case 'false':
			return false;
		case '!stop':
			return null;
		case '1.3':
			return 1.3;
		case '1':
			return 1;
		case 'test':
			return test;
	}
}