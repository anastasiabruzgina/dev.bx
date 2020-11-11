<?php

require("./readfromconsole.php");

function readFromConsoleTest()
{
	$result = readFromConsole('true');
	if($result = 'true') {
		echo ') Результат: '. $result . PHP_EOL . 'Ожидалось: true' . PHP_EOL . ($result === 'true' ? 'Test is passed'.PHP_EOL : 'Test is failed'.PHP_EOL);
	} else {
		echo 'Test is failed';
	}
}

{
	$result = readFromConsole('false');
	if($result = 'false') {
		echo 'Результат: '. $result . PHP_EOL . 'Ожидалось: false' . PHP_EOL . ($result === 'false' ? 'Test is passed'.PHP_EOL . PHP_EOL : 'Test is failed'.PHP_EOL);
	} else {
		echo 'Test is failed';
	}
}
{
	$result = readFromConsole('!stop');
	if($result = 'null') {
		echo 'Результат: '. $result . PHP_EOL . 'Ожидалось: null' . PHP_EOL . ($result === 'null' ? 'Test is passed'.PHP_EOL . PHP_EOL : 'Test is failed'.PHP_EOL);
	} else {
		echo 'Test is failed';
	}
}
	{
	$result = readFromConsole('1.3');
	if($result = '1.3') {
		echo 'Результат: '. $result . PHP_EOL . 'Ожидалось: 1.3' . PHP_EOL . ($result === '1.3' ? 'Test is passed'.PHP_EOL . PHP_EOL : 'Test is failed'.PHP_EOL);
	} else {
		echo 'Test is failed';
	}
}
	{
	$result = readFromConsole('1');
	if($result = '1') {
		echo 'Результат: '. $result . PHP_EOL . 'Ожидалось: 1' . PHP_EOL . ($result === '1' ? 'Test is passed'.PHP_EOL . PHP_EOL : 'Test is failed'.PHP_EOL);
	} else {
		echo 'Test is failed';
	}
}
	{
	$result = readFromConsole('test');
	if($result = 'test') {
		echo 'Результат: '. $result . PHP_EOL . 'Ожидалось: test' . PHP_EOL . ($result === 'test' ? 'Test is passed'.PHP_EOL . PHP_EOL : 'Test is failed'.PHP_EOL);
	} else {
		echo 'Test is failed';
	}
}

echo readFromConsoleTest();
